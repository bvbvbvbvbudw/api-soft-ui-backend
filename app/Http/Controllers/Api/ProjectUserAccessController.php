<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
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
        $projectId = $request->input('project_id');
        $access = ProjectUserAccess::where('project_id', $projectId)->get();
        $userIds = $access->pluck('user_id');
        $users = User::whereIn('id', $userIds)->get();

        $roles = ProjectUserAccess::where('user_id', $request->user_id)
            ->where('project_id', $projectId)
            ->get();

        $response = [
            'response' => [
                'success' => true,
                'comments' => [
                    'data' => $users,
                    'roles' => $roles,
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
        if ($request->deleteId && $request->project_id) {
            $result = ProjectUserAccess::where('user_id', $request->deleteId)
                ->where('project_id', $request->project_id)
                ->first();

            if ($result) {
                $result->delete();
                $message = 'delete comment';
                return response()->json($message, 200);
            } else {
                $message = 'no comment';
                return response()->json($message, 200);
            }
        }


        $comment = ProjectUserAccess::updateOrCreate(
            [
                'project_id' => $request->project_id,
                'user_id' => $request->user_id,
            ],
            [
                'access_level' => $request->access_level,
            ]
        );

        $response = [
            'response' => [
                'success' => true,
                'comment' => [
                    'data' => $comment,
                ],
            ],
        ];

        return response()->json($response, 200);
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
