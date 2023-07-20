<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Comment;
use App\Models\PhotoTask;
use App\Models\Task;
use Illuminate\Http\Request;    use Illuminate\Support\Facades\Storage;


class PhotoTaskController extends Controller
{
    public function index()
    {
        $photos = PhotoTask::all();
        return view ('task.photoTask.photoTask' ,['photos' => $photos]);
    }
    public function create()
    {
        $tasks = Task::all();
        return view('task.photoTask.photoTaskCreate', ['tasks' => $tasks]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'task_id' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $task_id = $request->task_id;
        $photo = $request->file('photo');

        if ($photo) {
            $path = $photo->storeAs('public/photos', $photo->hashName());

            $url = str_replace('public/', '', $path);

            PhotoTask::updateOrcreate(
                ['task_id' => $task_id],
                ['photo' => $url]
            );
        }

        $photos = PhotoTask::all();

        return view('task.photoTask.photoTask', ['photos' => $photos]);
    }


    public function show(Comment $comment)
    {
        //
    }
    public function edit($id)
    {

    }
    public function update(Request $request, $id)
    {

    }

    public function destroy(string $id)
    {
        $photo = PhotoTask::find($id);
        $photo->delete();

        $photos = PhotoTask::all();
        return view('task.photoTask.photoTask', ['photos' => $photos]);
    }
}
