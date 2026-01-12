<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    function create(){
        return view("auth.register");
    }
    function store(){
        // validate request
        $validatedAttributes = request()->validate([
            "first_name" => ["required"], 
            "last_name"=> ["required"], 
            "email"=> ["required", "email"],
            "password"=> ["required", Password::min(5), "confirmed"] 

        ]);
        // create a user in the database
        $user = User::create($validatedAttributes);
        // authenticate the user or sign them in 
        Auth::login($user);
        // redirect to the specific page
        return redirect("/jobs");
    }
}
