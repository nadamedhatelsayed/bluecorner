<?php

namespace App\Http\Controllers;

use App\slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        $sliders = slider::all();
        return view('slider.slider', compact('sliders'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $slider = new slider();

        $slider->title = $request->title;
        $slider->description = $request->description;

        if ($img = $request->file('image')) {
            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $img->move('images', $filename);
            $slider->image = $filename;
        };


        $slider->save();


        return redirect()->back()->with(['Add' => ' Data added succesfully ']);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'title' => 'required',
            'description' => 'required',
        ]);

        $slider = slider::find($id);
        $slider->title = $request->title;
        $slider->description = $request->description;
        if ($img = $request->file('image')) {
            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $img->move('images', $filename);
            $slider->image = $filename;
        }

        $slider->save();


        return redirect()->back()->with(['edit' => ' Data updated successfully ']);
    }


    public function destroy($id)
    {
        $slider = slider::find($id)->delete();
        return redirect()->back()->with(['delete' => '  Data deleted successfully  ']);
    }
}
