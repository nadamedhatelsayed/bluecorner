<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories= category::all();
        return view('category.category',compact('categories'));
    }


    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        category::create([
            'title' => $request->title
        ]);
        return redirect('admin/category')->with(['Add' => ' Data added succesfully ']);

    }




    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required|max:255 ',

        ]);
        $categories= category::find($id);
        $categories->update([
            'title' => $request->title
        ]);
        return redirect('admin/category')->with(['edit' => ' Data updated successfully ']);

    }



    public function destroy($id)
    {
        $categories = category::find($id)->delete();
        return redirect('admin/category')->with(['delete' => ' Data deleted successfully ']);


    }
}
