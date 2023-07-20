<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Task;
use App\Models\TaskDescription;
use Illuminate\Http\Request;
use App\Models\Comment;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorite = Favorite::all();
        return view('task.userfavorite.userfavorite', ['favorite' => $favorite]);
    }
    public function create()
    {
    }
    public function store(Request $request)
    {

    }
    public function show(Task $task)
    {
        //
    }
    public function edit(string $id)
    {

    }
    public function update(Request $request, string $id)
    {

    }
    public function destroy(string $id)
    {

    }
}
