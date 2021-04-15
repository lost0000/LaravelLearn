<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        

        return view('auth.login');

    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) //if user, otherwise null
        {
            //if the login request failed, it goes back, and flashes a message saying invalid login details
            return back()->with('status', 'Invalid login details');
        };

        return redirect()->route('dashboard');
    }
}
