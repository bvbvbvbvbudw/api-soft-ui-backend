<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Project;
use App\Models\ProjectUserAccess;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectUserAccessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('task.projects.adduser', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = Project::find($request->project_id);

        $comment = ProjectUserAccess::updateOrCreate(
            [
                'project_id' => $request->project_id,
                'user_id' => $request->user_id,

            ],
            [
                'access_level' => $request->access_level,
            ]
        );
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
