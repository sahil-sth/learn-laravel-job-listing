<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    //
    public function create(){
        return view("auth.login");
    }

    public function store(){
        //validate the request from the user
        $validatedAttributes = request()->validate([
            "email" => ["required", "email"], 
            "password" => ["required"]
        ]);
        //attempt to login
        if (!Auth::attempt($validatedAttributes)){
            throw ValidationException::withMessages(["email" => "Sorry your credentials do not match"]);
        }
        //regenarate session token
        request()->session()->regenerate();
        //redirect to jobs page
        return redirect("/jobs");
    }

    public function destroy(){
        Auth::logout();

        return redirect("/");
    }
}
