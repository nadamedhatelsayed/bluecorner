<?php

namespace App\Http\Controllers;

use App\services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{

    public function index()
    {
        $services = services::all();
        return view('services.services', compact('services'));
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'title' =>'required',
            'description' =>'required'
        ]);

        services::create([
            'title'        => $request->title,
            'description' => $request->description,

        ]);

        return redirect()->back()->with(['Add' => ' has been added succesfully ']);
    }


    public function update(Request $request,$id)
    {
        $this->validate($request, [

            'title' => 'required  ',
            'description' => 'required',
        ]);

        $slider = services::find($id);

        $slider->update([
            'title'        => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->back()->with(['edit' => ' Data updated successfully ']);
    }
    public function destroy($id)
    {
        $services = services::find($id)->delete();
        return redirect()->back()->with(['delete' => '  Data deleted successfully  ']);
    }
}
