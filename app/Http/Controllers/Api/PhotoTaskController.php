<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PhotoTask;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoTaskController extends Controller
{
    public function upload(Request $request)
    {
        $photo = $request->file('photo');
        $taskId = $request->input('task_id');

        if ($photo && $taskId) {
            $path = $photo->store('photos', 'public');
            $pathWithoutPublic = str_replace('public/', '', $path);

            PhotoTask::updateOrCreate(
                [
                    'task_id' => $taskId,
                ],
                [
                    'photo' => $pathWithoutPublic,
                ]
            );

            return response()->json([
                'success' => true,
                'message' => 'Photo uploaded successfully',
                'path' => $pathWithoutPublic,
                'task_id' => $taskId,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Missing file or task_id',
            ], 400);
        }
    }



    public function send(Request $request)
    {
        $photoTask = PhotoTask::where('task_id', $request->task_id)->first();

        if ($photoTask) {
//            $photoPath = str_replace('/public', '', $photoTask->photo);
            return response()->json($photoTask,200);
        } else {
            return null;
        }
    }


}
