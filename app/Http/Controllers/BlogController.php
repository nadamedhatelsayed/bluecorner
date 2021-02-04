<?php

namespace App\Http\Controllers;

use App\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogs= blog::all();
        return  view('blog.blog',compact('blogs'));
    }


    public function edit($id)
    {
        $blogs= blog::where('id',$id)->first();


        return view('blog.edit',compact('blogs'));
    }


    public function store(Request $request)
    {
         request()->validate([

            'image' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'description' => 'required',


        ]);
        $blogs= new blog();
        $blogs->title =$request->title;
        $blogs->description =$request->description;
        $blogs->body =$request->body;

        if ($img = $request->file('image')) {
            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()).'.'.$extension;
            $img->move('images', $filename);
            $blogs->image = $filename;
        };


        $blogs->save();

        return redirect()->back()->with(['Add' => ' Data added succesfully ']);
    }


    public function show()
    {
        //
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'description' => 'required',

        ]);
        $blogs = blog::findOrFail($id);
        $blogs->title =$request->title;
        $blogs->description =$request->description;
        $blogs->body =$request->body;



        if ($img = $request->file('image')) {
            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()).'.'.$extension;
            $img->move('images', $filename);
            $blogs->image = $filename;
        }

          $blogs->save();

        return redirect('admin/blogs')->with(['edit' => ' Data updated succesfully ']);
    }


    public function destroy($id)
    {
        $blogs = blog::find($id)->delete();
        return redirect()->back()->with(['delete' => '  Data deleted successfully  ']);
    }
}
