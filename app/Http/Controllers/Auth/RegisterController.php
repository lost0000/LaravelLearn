<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('auth.register');
    }

    public function store(Request $request) 
    {
        //validation/ CHECKOUT VALIDATION RULES ON LARAVEL PAGES
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            // Hash is a facade, make makes it not a static class
            'password' => Hash::make($request->password)
        ]);

            //sign in
            auth()->attempt($request->only('email', 'password')); //if user, otherwise null



        return redirect()->route('dashboard');

        //store
        //sign in
        //redirect
    }
}
