<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Project;
use App\Models\Status;
use App\Models\Task;
use App\Models\TaskComment;
use App\Models\User;
use Illuminate\Http\Request;

class TaskCommentController extends Controller
{
    public function index()
    {
        $taskComments = TaskComment::with('comment', 'task')->get();
        return view('task.comment.comment', ['taskComments' => $taskComments]);
    }

    public function create()
    {
        $tasks = Task::all();
        $users = User::all();
        $statuses = Status::all();
        $projects = Project::all();
        return view('task.comment.commentCreate', ['tasks' => $tasks, 'users' => $users, 'statuses' => $statuses, 'projects' => $projects]);
    }
    public function store(Request $request)
    {
        $comment = Comment::create([
            'description' => $request->description,
            'user_id' => $request->user_id
        ]);
        $taskComment = TaskComment::create([
            'task_id' => $request->task_id,
            'comment_id' => $comment->id,
        ]);
        $comments = Comment::all();
        $taskComments = TaskComment::all();

        return view('task.comment.comment', ['comments' => $comments, 'taskComments' => $taskComments]);
    }
    public function show(TaskComment $taskComment)
    {
        //
    }
    public function edit(string $id)
    {
        $taskComment = TaskComment::find($id);
        $task = Task::find($taskComment->task_id);
        $comment = Comment::find($taskComment->comment_id);

        return view('task.comment.commentEdit', ['taskComment' => $taskComment, 'task' => $task, 'comment' => $comment]);
    }

    public function update(Request $request, string $id)
    {
        $taskComment = TaskComment::find($id);
        $task = Task::find($taskComment->task_id);
        $comment = Comment::find($taskComment->comment_id);

        $taskComment->task_id = $request->task_id;
        $taskComment->comment_id = $request->comment_id;
        $taskComment->save();

        $task -> name = $request -> name;
        $task -> status_id = $request -> status_id;
        $task -> project_id = $request -> project_id;
        $task->save();

        $comment -> description = $request -> description;
        $comment -> user_id = $request -> user_id;
        $comment->save();

        $taskComments = TaskComment::all();
        $tasks = Task::all();
        $comments = Comment::all();
        return view ('task.comment.comment',['taskComments' => $taskComments, 'task' => $tasks, 'comments' => $comments]);
    }
    public function destroy(string $id)
    {
        $taskComment = TaskComment::find($id);
        $task = Task::find($taskComment->task_id);
        $comment = Comment::find($taskComment->comment_id);

        $taskComment -> delete();
        $task->delete();
        $comment->delete();

        $comments = Comment::all();
        $taskComments = TaskComment::all();
        $tasks = Task::all();

        return view ('task.comment.comment',['taskComments' => $taskComments, 'task' => $tasks, 'comments' => $comments]);
    }
}
