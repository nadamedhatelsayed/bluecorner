<?php

namespace App\Http\Controllers;

use App\requests;
use Illuminate\Http\Request;

class RequestController extends Controller
{

    public function index()
    {
        $requests= requests::all();
        return  view('requests.requests',compact('requests'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $this->validate($request, [

            'name' => 'required|max:255|unique:requests,name',
            'email' => 'required|email',
            'subject' => 'required',
        ]);

        requests::create([
            'name'        => $request->name,
            'email'       => $request->email,
            'subject'     => $request->subject,
            'message'     => $request->message,

        ]);
        return redirect('contact')->with(['Add' => 'Data created successfully ']);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' =>'required'
        ]);

        $requests = requests::find($id);

        $requests->update([
            'name'        => $request->name,
            'email'        => $request->email,
            'subject'    => $request->subject,
            'message'    => $request->message,

        ]);

        return redirect()->back()->with(['edit' => ' Data updated successfully ']);
    }



    public function destroy($id)
    {
        $requests = requests::find($id)->delete();
        return redirect()->back()->with(['delete' => '  Data deleted successfully  ']);
    }

}
