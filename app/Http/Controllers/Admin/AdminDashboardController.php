<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin;
use App\Models\Issue;
use App\Models\Category;
use App\Models\Complaint;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    protected $complains;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth:admin');
        $this->complains = Complaint::get();
    }

    public function index()
    {
        $complains = Complaint::get();
        $resolved = Complaint::where('resolved', true)->count();
        $unresolved = Complaint::where('resolved', false)->count();
        $users = User::count();

        return view('admin.dashboard', compact('complains', 'resolved', 'unresolved', 'users'));
    }

    public function adminList()
    {
        $complains = $this->complains;
        $admins = Admin::get();
        return view('admin.adminlist', compact('complains', 'admins'));
    }

    public function adminCreate(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6',
        ]);

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);

        $admin->save();
        if ($admin->save()) {
            return redirect()->route('admin.adminList')->with('success', 'Admin Created Successfully');
        }
        return redirect()->back()->with('error', 'sorry, something went wrong while creating admin');
    }

    public function adminDelete(Request $request)
    {
        $admin = Admin::find($request->admin_id);

        if ($admin->delete()) {
            return redirect()->back()->with('success', 'Admin Deleted Successfully');
        }

        return redirect()->back()->with('error', 'Sorry, something went wrong while deleting admin');
    }

    public function issuesList()
    {
        $complains = $this->complains;
        $categories = Category::get();
        $issues = Issue::get();

        return view('admin.issues', compact('complains', 'issues', 'categories'));
    }

    public function issuesCreate(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'issue' => 'required',
        ]);

        $complain = new Issue();
        $complain->title = $request->title;
        $complain->categories_id = $request->category;
        $complain->issue = $request->issue;

        if ($complain->save()) {
            return redirect()->route('admin.issuesList')->with('success', 'Issue created successfully');
        }
        return redirect()->route('admin.issuesList')->with('error', 'sorry, something went wrong');
    }

    public function issuesShow($id)
    {
        $issue = Issue::where('id', $id)->with('category')->first();
        return view('admin.showIssue', compact('issue'));
    }

    public function deleteIssue($id)
    {
        $issue = Issue::find($id);
        if ($issue->delete()) {
            return redirect()->route('admin.issuesList')->with('success', 'Issue deleted successfully');
        }
        return redirect()->route('admin.issuesList')->with('error', 'sorry, something went wrong');
    }


    public function categoriesList()
    {
    }

    public function categoriesCreate()
    {
    }
}