<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User extends Controller
{
    public function userAuthenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'user') {
                // Authentication passed...
                $request->session()->regenerate();
                return redirect()->route('dashboard.view')->with('success', 'Logged in Successfully');
            } else {
                Auth::logout();
                return redirect()->back()->with('error', 'Unauthorized access');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }

    public function adminAuthenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'admin') {
                // Authentication passed...
                $request->session()->regenerate();
                return redirect()->route('admin.dashboard')->with('success', 'Logged in Successfully as Admin');
            } else {
                Auth::logout();
                return redirect()->back()->with('error', 'Unauthorized access');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logged out successfully');
    }


}
