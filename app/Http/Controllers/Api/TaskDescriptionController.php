<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\TaskDescription;
use App\Models\TaskUser;
use Illuminate\Http\Request;

class TaskDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $description = TaskDescription::where('task_id', $request->task)->first();
        $response = [
            'response' => [
                'success' => true,
                'tasks' => [
                    'description' => $description,
                ]
            ]
        ];
        return response()->json($response, 200);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $taskDescription = TaskDescription::updateOrCreate(
            ['task_id' => $request->task_id],
            ['description' => $request->description]
        );

        if ($taskDescription) {
            return response()->json('Task description updated/created successfully', 200);
        } else {
            return response()->json('Failed to update/create task description', 500);
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
