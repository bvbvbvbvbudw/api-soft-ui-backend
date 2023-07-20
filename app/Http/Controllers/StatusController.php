<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $statuses = Status::all();
        return view ('task.status.status', ['statuses' => $statuses]);
    }
    public function create()
    {
        return view('task.status.statusCreate');
    }
    public function store(Request $request)
    {
        Status::create([
            'name' => $request -> name,
            'is_active' => $request -> is_active,
        ]);
        $statuses = Status::all();
        return view('task.status.status', ['statuses' => $statuses]);
    }
    public function show(Status $status)
    {
        //
    }
    public function edit(string $id)
    {
        $status = Status::find($id);
        return view('task.status.statusEdit', ['status' => $status]);
    }
    public function update(Request $request, string $id)
    {
        $status = Status::find($id);
        $status -> name = $request -> name;
        $status -> is_active = $request -> is_active;
        $status -> save();
        return view('task.status.status', ['statuses' => $status]);
    }
    public function destroy(string $id)
    {
        $status = Status::find($id);
        $status -> delete();
        $statuses = Status::all();
        return view('task.status.status',['statuses' => $statuses]);
    }
}
