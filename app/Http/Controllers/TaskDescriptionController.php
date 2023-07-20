<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TaskDescription;
use Illuminate\Http\Request;
use App\Models\Comment;

class TaskDescriptionController extends Controller
{
    public function index()
    {
        $tasksdesc = TaskDescription::all();
        return view('task.taskdesc.taskdesc', ['tasksdesc' => $tasksdesc]);
    }
    public function create()
    {
        $tasks = Task::all();
        return view('task.taskdesc.taskdescCreate', ['tasks' => $tasks]);
    }
    public function store(Request $request)
    {
        $taskDescription = TaskDescription::updateOrCreate(
            ['task_id' => $request->task_id],
            ['description' => $request->description]
        );
        $tasks = TaskDescription::all();
        return view('task.taskdesc.taskdesc', ['tasksdesc' => $tasks]);
    }

    public function show(Task $task)
    {
        //
    }
    public function edit(string $id)
    {
        $task = TaskDescription::find($id);
        return view('task.taskdesc.taskdescEdit', ['task' => $task]);
    }
    public function update(Request $request, string $id)
    {
        $task = TaskDescription::find($id);
        $task -> description = $request -> description;
        $task -> task_id = $request -> task_id;
        $task -> save();

        $tasks = TaskDescription::all();
        return view('task.taskdesc.taskdesc', ['tasksdesc' => $tasks]);
    }
    public function destroy(string $id)
    {
        $task = TaskDescription::find($id);
        $task->delete();
        $tasks = TaskDescription::all();
        return view('task.taskdesc.taskdesc', ['tasksdesc' => $tasks]);
    }
}
