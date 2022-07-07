<?php

namespace App\Http\Controllers\Complaint;

use App\Models\Activity;
use App\Models\Complaint;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComplaintController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->check()) {
            $complains = Complaint::where('user_id', auth()->user()->id)
                ->with('comments')
                ->get();
        } else {
            $complains = Complaint::with('comments')->get();
        }

        return view('complaint.index', compact('complains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('complaint.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $complaint = Complaint::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => auth()->user()->id,
            'resolved' => false,
        ]);

        if ($complaint) {

            Activity::create([
                'description' => $request->title,
                'type' => 'complaint',
                'user_id' => auth()->user()->id,
                'complaint_id' => $complaint->id,
                'comment_id' => null,
            ]);

            return redirect()->route('complaint.index')->with(['success' => 'Sucessfully, Your complaint has been submitted.']);
        }

        return redirect()->back()->with(['error' => 'Something went wrong, Please try again.']);
    }

    /**
     * Display the specified resource.
     *
     * @param integer  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $complain = Complaint::where('id', $id)->with(['user', 'comments'])->first();
        // dd($complain);
        return view('complaint.show', compact('complain'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function edit(Complaint $complaint)
    {
        $complain = $complaint->find($complaint->id);

        return view('complaint.edit', compact('complain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Complaint $complaint)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $complaint->title = $request->title;
        $complaint->description = $request->description;
        $complaint->save();

        return redirect()->route('complaint.index')->with(['message' => 'Sucessfully, Complaint updated.']);
    }

    /**
     * Mark complaint as resolved.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function resolve(Request $request)
    {
        $complaint = Complaint::find($request->complain_id);
        $complaint->resolved = true;
        $complaint->save();

        return redirect()->route('dashboard')->with(['success' => 'Sucessfully, Complaint resolved.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $complaint = Complaint::find($request->complain_id);

        if ($complaint->delete()) {
            return redirect()->route('dashboard')->with(['success' => 'Sucessfully, Complaint deleted.']);
        }

        return redirect()->back()->with(['error' => 'Something went wrong, Please try again.']);
    }
}