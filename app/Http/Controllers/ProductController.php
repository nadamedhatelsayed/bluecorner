<?php

namespace App\Http\Controllers;

use App\category;
use App\images;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    public function index()
    {
        $products = product::all();
        return view('products.products', compact('products'));
    }

    public function create()
    {
        $products = product::all();
        $categories = category::all();
        return view('products.create', compact('products', 'categories'));
    }

    public function store(Request $request)
    {
        request()->validate([

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image' => 'required',
            'title' => 'required',
            'cat_id' => 'required',
        ]);
        $products = new product();
        $products->title = $request->title;
        $products->description = $request->description;
        $products->cat_id = $request->cat_id;
        $products->price = $request->price;


        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $file->move(public_path('/images'), $filename);
            $products->image = $filename;
        }

        $products->save();
        return redirect('admin/products')->with(['Add' => 'Add Project Succesfully ']);
    }


    public function details($id)
    {
        $products = product::where('id', $id)->first();
        $category = category::all();
        return view('products.details', compact('products', 'category'));

    }

    public function edit($id)
    {
        $products = product::where('id', $id)->first();
        $categories = category::all();
        return view('products.edit', compact('products', 'categories'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $products = product::findOrFail($id);
        $products->title = $request->title;
        $products->description = $request->description;
        $products->cat_id = $request->cat_id;
        $products->price = $request->price;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $file->move(public_path('/images'), $filename);

            $products->image = $filename;
        }
        $products->save();
        return redirect('admin/products')->with(['edit' => 'Data updated successfully ']);
    }


    public function destroy($id)
    {
        $products = product::where('id', $id)->first()->delete();
        return redirect()->back()->with(['delete' => 'Data deleted successfully ']);

    }
}
