<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Models\Comment;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('task.task.task', ['tasks' => $tasks]);
    }
    public function create()
    {
        return view('task.task.taskCreate');
    }
    public function store(Request $request)
    {
        Task::create([
           'name' => $request -> name,
           'user_id' => $request -> user_id,
           'status_id' => $request -> status_id,
            'project_id' => $request -> project_id
        ]);
        $tasks = Task::all();
        return view('task.task.task', ['tasks' => $tasks]);
    }
    public function show(Task $task)
    {
        //
    }
    public function edit(string $id)
    {
        $task = Task::find($id);
        return view('task.task.taskEdit', ['task' => $task]);
    }
    public function update(Request $request, string $id)
    {
        $task = Task::find($id);
        $task -> name = $request -> name;
        $task -> user_id = $request -> user_id;
        $task -> status_id = $request -> status_id;
        $task -> project_id = $request -> project_id;
        $task -> save();
        $tasks = Task::all();
        return view('task.task.task' , ['tasks' => $tasks]);
    }
    public function destroy(string $id)
    {
        $task = Task::find($id);
        $task -> delete();
        $tasks = Task::all();
        return view('task.task.task', ['tasks' => $tasks]);
    }
}
