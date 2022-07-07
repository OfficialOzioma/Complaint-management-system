<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserAuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:user')->except('logout');
    }

    public function login()
    {
        return view('user.login');
    }

    public function userAuthenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (auth('user')->attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return redirect()->back()->with('error', 'These credentials do not match our records!');
    }

    public function register()
    {
        return view('user.register');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|numeric',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);

        if ($user) {
            return redirect()->route('login')->with(['info' => 'Sucessfully, Please you now login.']);
        }

        return redirect()->route('login')->with(['error' => 'Something went wrong, Please try again.']);
    }


    public function logout()
    {
        auth('user')->logout();
        return redirect()->route('login');
    }
}