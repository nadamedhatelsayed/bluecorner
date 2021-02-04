<?php

namespace App\Http\Controllers;

use App\team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = team::all();
        return view('teams.teams', compact('teams'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = team::all();
        return view('teams.add', compact('teams'));
    }


    public function store(Request $request)
    {

        request()->validate([

            'image' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'job' => 'required',
            'email' => 'required',
            'description' =>'required|max:200'


        ]);

        $teams = new team();
        $teams->name = $request->name;
        $teams->job = $request->job;
        $teams->email = $request->email;
        $teams->description = $request->description;
        $teams->twitter = $request->twitter;
        $teams->facebook = $request->facebook;
        $teams->instagram = $request->instagram;
        $teams->linkedin = $request->linkedin;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $file->move(public_path('/images'), $filename);
            $teams->image = $filename;
//           // dd($filename);
        }


        $teams->save();


        return redirect('admin/team')->with(['Add' => 'Add succesfully ']);
    }


    public function show(team $team)
    {
        //
    }


    public function edit($id)
    {
        $teams = team::where('id', $id)->first();
        return view('teams.edit', compact('teams'));
    }


    public function update(Request $request, $id)
    {
        request()->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'email' => 'required',
            'job' => 'required',
        ]);
        $teams = team::findOrFail($id);
        $teams->name = $request->name;
        $teams->email = $request->email;
        $teams->description = $request->description;
        $teams->job = $request->job;
        $teams->facebook = $request->facebook;
        $teams->twitter = $request->twitter;
        $teams->instagram = $request->instagram;
        $teams->linkedin = $request->linkedin;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $file->move(public_path('/images'), $filename);
            $teams->image = $filename;
//           // dd($filename);
        }

        $teams->save();

        return redirect('/admin/team')->with(['edit' => 'Data updated successfully ']);

    }

    public function destroy($id)
    {
        $team = team::find($id)->delete();
        return redirect()->back()->with(['delete' => 'Data deleted successfully ']);


    }
}
