<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRoutesController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function auth(Request $request)
    {
        // return a 404 error if user is not authenticated
        if ($request->user()) {
            return redirect()->route('admin.dashboard');
        }

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
            'remember_me' => 'boolean',
        ]);

        // attempt to authenticate the user
        if (auth()->attempt($request->only('email', 'password', 'remember_me'))) {
            // redirect to dashboard if authentication is successful
            return redirect()->route('admin.dashboard');
        } else {
            // redirect to login page if authentication fails
            return redirect()->route('admin.login')->with('error', 'Invalid login credentials');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login');
    }
}
