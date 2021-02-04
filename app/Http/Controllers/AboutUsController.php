<?php

namespace App\Http\Controllers;
use App\aboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutUsController extends Controller
{

    public function index()
    {
        $aboutus= aboutUs::all();
        return view('about.about',compact('aboutus'));
    }


    public function store(Request $request)
    {
        request()->validate([
            'image' => 'required',
            'mission' => 'required',
            'vision' => 'required',
            'description' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email'
        ]);

        $aboutus = new aboutUs();
        $aboutus->vision = $request->vision;
        $aboutus->phone = $request->phone;
        $aboutus->mission = $request->mission;
        $aboutus->email = $request->email;
        $aboutus->description = $request->description;
        $aboutus->address = $request->address;

        if ($img = $request->file('image')) {
            $name = time() . $img->getClientOriginalName();
            $img->move('images', $name);
            $aboutus->image = $name;
        }

        $aboutus->save();

        return redirect('/admin/about')->with(['Add' => ' Data added succesfully ']);
    }


    public function edit($id)
    {
        $aboutus= aboutUs::where('id',$id)->first();
        return view('about.edit',compact('aboutus'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mission' => 'required',
            'vision' => 'required',
            'description' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric',
        ]);

        $aboutus = aboutUs::findOrFail($id);
        $aboutus->phone =$request->phone;
        $aboutus->email = $request->email;
        $aboutus->description =$request->description;
        $aboutus->vision =$request->vision;
        $aboutus->mission =$request->mission;
        $aboutus->email = $request->email;



        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()).'.'.$extension;
            $file->move(public_path('/images'),$filename);
            $aboutus->image=$filename;
//           // dd($filename);
        }



        $aboutus->save();

        return redirect('/admin/about')->with(['edit' => 'Data updated successfully ']);

    }



}
