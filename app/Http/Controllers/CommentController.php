<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view ('task.comment.comment' ,['comments' => $comments]);
    }
    public function create()
    {
        return view('task.comment.commentCreate');
    }
    public function store(Request $request)
    {
        Comment::create([
           'description' => $request -> description,
           'user_id' => $request -> user_id,
        ]);
        $comments = Comment::all();
        return view('task.comment.comment', ['comments' => $comments]);
    }
    public function show(Comment $comment)
    {
        //
    }
    public function edit($id)
    {
        $comment = Comment::find($id);
        return view('task.comment.commentEdit', ['comment' => $comment]);
    }
    public function update(Request $request, string $id)
    {
        $comment = Comment::find($id);
        $comment->description = $request->description;
        $comment->user_id = $request->user_id;
        $comment->save();

        $comments = Comment::all();
        return view('task.comment.comment', ['comments' => $comments]);
    }

    public function destroy(string $id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        $comments = Comment::all();
        return view('task.comment.comment', ['comments' => $comments]);
    }
}
