<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
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

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function userAuthenticate(Request $request): RedirectResponse
    {
        $request->validate([
            'reg_no' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('reg_no', 'password');
        if (auth('user')->attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return redirect()->back()->with('error', 'These credentials do not match our records!');
    }

    /**
     * @return Application|Factory|View
     */
    public function register(): View|Factory|Application
    {
        return view('user.register');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function signup(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'reg_no' => 'required|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'reg_no' => $request->reg_no,
            'password' => bcrypt($request->password),
        ]);

        if ($user) {
            return $this->userAuthenticate($request);
            // return redirect()->route('login')->with(['info' => 'Sucessfully, Please you now login.']);
        }

        return redirect()->route('login')->with(['error' => 'Something went wrong, Please try again.']);
    }


    public function logout()
    {
        auth('user')->logout();
        return redirect()->route('login');
    }
}