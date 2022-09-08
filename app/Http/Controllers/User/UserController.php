<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Complaint;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $complaints = Complaint::where('user_id', auth('user')->id())
            ->with('comments', 'activities')->latest()->get();

        $user = User::where('id', auth('user')->id())->with('setting')->first();

        return view('user.dashboard', compact('complaints', 'user'));
    }
}