<?php

namespace App\Http\Controllers;

use App\images;
use App\product;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use function GuzzleHttp\Psr7\str;

class ImagesController extends Controller
{

    public function index()
    {

        $images = images::all();
        $products = product::all();
        return view('images.images', compact('images', 'products'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'image' => 'required',
            'image.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_id' => 'required'

        ]);

        $images = new images();
        $images->product_id = $request->product_id;

        $image = $request->file('image');
        $imagename = time() . $image->getClientOriginalName();
        $img = Image::make($image)->resize(400, 400);
        $img->save('images/' . $imagename);

        $images->image = $imagename;
        $images->save();



        return redirect('admin/img')->with(['Add' => ' Data added succesfully ']);
    }

    public function show($id)
    {
        $products = product::find($id);
        $image = images::where('product_id', $id)->first();
        $images = images::where('product_id', $id)->get();
        return view('images.view', compact('images', 'image', 'products'));
    }

    public function edit($id)
    {
        $images = images::find($id);
        return view('images.edit', compact('images'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $images = images::findOrFail($id);
        $imagePath = images::where('id', $id)->first();

        if ($imagePath) {
            unlink('images/' . $imagePath->image);
        }

        if ($img = $request->file('image')) {
            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $img->move('images', $filename);
            if (File::exists($filename)) {
                unlink($filename);
            }
            $images->image = $filename;
        }
        $images->save();
        return redirect('admin/img')->with(['Add' => ' Data added succesfully ']);
    }

    public function destroy($id)
    {
//        $images = images::find($id)->delete();
        $images = images::findOrFail($id);
        $image_path = public_path("images\\").$images->image;
         if(File::exists($image_path)) {
           File::delete($image_path);
         }
        $images->delete();
        return redirect('admin/img')->with(['delete' => ' Data deleted succesfully ']);

    }

 }
