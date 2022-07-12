<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{


    public function login()
    {
        return view('admin.login');
    }

    public function adminAuthenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.home');
        }
        return redirect()->back()->withErrors(['These credentials do not match our records.']);
    }

    public function logout()
    {
        auth('admin')->logout();
        return redirect()->route('admin.login');
    }
}