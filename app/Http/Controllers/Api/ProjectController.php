<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectUserAccess;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user_id = $request->input('user_id');

        $projects = Project::whereHas('users', function ($query) use ($user_id) {
            $query->where('user_id', $user_id);
        })->get();

        $response = [
            'response' => [
                'success' => true,
                'tasks' => [
                    'data' => $projects,
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
        if($request -> deleteId){
            $result = Project::find($request -> deleteId);
            if($result){
                $result -> delete();
                $message = 'delete done';
                return response()->json($message,200);
            } else{
                $message = 'delete not done';
                return response()->json($message,200);
            }
        }
        if($request -> id){
            $project = Project::find($request -> id);
            $project -> project = $request -> project;
            $project -> creator_id = $request -> creator_id;
            $project -> save();
            if($project){
                $response = [
                    'response' => [
                        'success' => true,
                        'project' => [
                            'data' => $project,
                        ]
                    ]
                ];
                return response()->json($response, 200);
            } else {
                $message = 'no projects';
                return response()->json($message,200);
            }
        } else {
            $project = Project::create([
                'project' => $request -> project,
                'creator_id' => $request -> creator_id,
            ]);
            $roles = ProjectUserAccess::create([
                'project_id' => $project->id,
                'user_id' => $request -> creator_id,
                'access_level' => 'teamlead',
            ]);
            $response = [
                'response' => [
                    'success' => true,
                    'project' => [
                        'data' => $project,
                    ]
                ]
            ];
            return response()->json($response, 200);
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
