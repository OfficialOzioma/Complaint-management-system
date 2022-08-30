<?php

namespace App\Http\Controllers\Complaint;

use App\Models\Comment;
use App\Models\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();

        return view('comment.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comment.create');
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
            'comment' => 'required|min:2',
            'complain_id' => 'required',
        ]);
        // dd(auth('admin')->check());
        $comment = new Comment();
        $comment->user_id = auth()->user()->id ?? auth('admin')->user()->id;
        $comment->user_type = auth('admin')->check() ? 'admin' : 'user';
        $comment->complaint_id = $request->complain_id;
        $comment->body = $request->comment;

        if ($comment->save()) {

            Activity::create([
                'description' => 'You commented a complaint',
                'type' => 'comment',
                'user_id' =>  auth()->user()->id ?? auth('admin')->user()->id,
                'complaint_id' => $request->complain_id,
                'comment_id' => $comment->id,
            ]);

            return redirect()->back()->with(['success' => 'Comment added successfully.']);
        }
        return redirect()->back()->with(['error' => 'Something went wrong, Please try again.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        $comment = Comment::find($comment->id);
        return view('comment.show', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        $comment = Comment::find($comment->id);
        return view('comment.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $updatecomment = $comment->find($comment->id);
        $updatecomment->body = $request->body;
        $updatecomment->save();

        return redirect()->route('comment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     *  @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $comment = Comment::find($request->comment_id);

        if ($comment->delete()) {
            return redirect()->back()->with(['success' => 'Sucessfully, Comment deleted.']);
        }

        return redirect()->back()->with(['error' => 'Something went wrong, Please try again.']);
    }
}
