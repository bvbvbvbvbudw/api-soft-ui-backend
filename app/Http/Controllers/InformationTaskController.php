<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Complexity;
use App\Models\InformationTask;
use App\Models\Status;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class InformationTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info = InformationTask::all();
        return view('task.information.information', ['informations' => $info]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $task = Task::all();
        $comp = Complexity::all();
        $user = User::all();
        return view('task.information.informationCreate', ['tasks' => $task, 'comps' => $comp, 'users' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        InformationTask::create([
            'task_id' => $request -> task_id,
            'user_assigned' => $request -> user_assigned,
            'deadline' => $request -> deadline,
            'complexity' => $request -> complexity
        ]);
        $informations = InformationTask::all();
        return view('task.information.information', ['informations' => $informations]);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $information = InformationTask::find($id);
        $task = Task::all();
        $comp = Complexity::all();
        $user = User::all();
        return view('task.information.informationEdit', ['information' => $information, 'tasks' => $task, 'comps' => $comp, 'users' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $information = InformationTask::find($id);
        $information -> task_id = $request -> task_id;
        $information -> user_assigned = $request -> user_assigned;
        $information -> deadline = $request -> deadline;
        $information -> complexity = $request -> complexity;
        $information -> save();

        $informations = InformationTask::all();
        return view('task.information.information', ['informations' => $informations]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $information = InformationTask::find($id);
        $information -> delete();
        $informations = InformationTask::all();
        return view('task.information.information',['informations' => $informations]);
    }
}
