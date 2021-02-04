<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{

    public function create()
    {
        return view('registration.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

//        $user = User::create(request(['name', 'email', 'password']));
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
//        auth()->login($user);

        return redirect('admin/register')->with(['Add' => ' User added succesfully ']);

    }






}
