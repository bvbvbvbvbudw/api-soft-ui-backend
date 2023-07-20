<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\InformationTask;
use App\Models\Status;
use Illuminate\Http\Request;

class InformationTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('task')) {
            $status = InformationTask::with('user')->where('task_id', $request->task)->get();
        } else {
            $status = InformationTask::with('user')->get();
        }

        $response = [
            'response' => [
                'success' => true,
                'status' => [
                    'data' => $status,
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
        if ($request->deleteId) {
            $result = InformationTask::where('user_assigned', $request->deleteId)->first();
            if ($result) {
                $result->delete();
                $message = 'delete comment';
                return response()->json($message, 200);
            } else {
                $message = 'no comment';
                return response()->json($message, 200);
            }
        }


        if ($request->has('user_assigned')) {
            $userIds = $request->user_assigned;

            if (count($userIds) === 1) {
                $comment = InformationTask::updateOrCreate(
                    [
                        'task_id' => $request->task_id,
                    ],
                    [
                        'user_assigned' => $userIds[0],
                        'access_level' => $request->access_level,
                        'deadline' => $request->deadline,
                        'complexity' => $request->complexity,
                    ]
                );
            } else {
                foreach ($userIds as $userId) {
                    $existingComment = InformationTask::where('task_id', $request->task_id)
                        ->where('user_assigned', $userId)
                        ->first();

                    if ($existingComment) {
                        $existingComment->update([
                            'access_level' => $request->access_level,
                            'deadline' => $request->deadline,
                            'complexity' => $request->complexity,
                        ]);
                    } else {
                        $comment = InformationTask::create([
                            'task_id' => $request->task_id,
                            'user_assigned' => $userId,
                            'access_level' => $request->access_level,
                            'deadline' => $request->deadline,
                            'complexity' => $request->complexity,
                        ]);
                    }
                }
            }
        }

        $response = [
            'response' => [
                'success' => true,
                'comment' => [
                    'data' => $comment ?? null,
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
