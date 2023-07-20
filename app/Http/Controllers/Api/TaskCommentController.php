<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TaskComment;
use Illuminate\Http\Request;

class TaskCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasksComments = TaskComment::all();
        $response = [
            'response'=>[
                'success' => true,
                'taskcomment'=>[
                    'data'  => $tasksComments,
                ]
            ]
        ];

        return response()->json($response, 200); // return response()->json($posts);
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
            $result = TaskComment::find($request -> deleteId);
            if($result){
                $result -> delete();
                $message = 'delete status';
                return response()->json($message, 200);
            } else {
                $message = 'no status';
                return response()->json($message, 200);
            }
        }
        if($request -> id){
            $tasksComment = TaskComment::find($request -> id);
            $tasksComment -> task_id = $request -> task_id;
            $tasksComment -> comment_id = $request -> comment_id;
            $tasksComment -> save();
            if($tasksComment){
                $response = [
                    'response'=>[
                        'success' => true,
                        'taskcomment'=>[
                            'data'  => $tasksComment,
                        ]
                    ]
                ];
                return response()->json($response, 200);
            }
            else{
                $message = 'no status';
                return response()->json($message, 200);

            }
        } else {
            $tasksComment = TaskComment::create([
                'task_id' => $request -> task_id,
                'comment_id' => $request -> comment_id,
            ]);
            $response = [
                'response'=>[
                    'success' => true,
                    'taskcomment'=>[
                        'data'  => $tasksComment,
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
