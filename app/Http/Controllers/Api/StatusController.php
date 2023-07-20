<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status = Status::all();
        $response = [
            'response'=>[
                'success' => true,
                'status'=>[
                    'data'  => $status,
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
            $result = Status::find($request -> deleteId);
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
            $status = Status::find($request -> id);
            $status -> name = $request -> name;
            $status -> is_active = $request -> is_active;
            $status -> save();
            if($status){
                $response = [
                    'response'=>[
                        'success' => true,
                        'status'=>[
                            'data'  => $status,
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
            $status = Status::create([
                'name' => $request -> name,
                'is_active' => $request -> is_active,
            ]);
            $response = [
                'response'=>[
                    'success' => true,
                    'status'=>[
                        'data'  => $status,
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
