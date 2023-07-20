<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Comment;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function index()
    {
        $avatars = Avatar::all();
        return view ('task.avatar.avatar' ,['avatars' => $avatars]);
    }
    public function create()
    {
    }
    public function store(Request $request)
    {

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
        $avatar = Avatar::find($id);
        if (!$avatar) {
            abort(404);
        }

        $avatar->avatar = 'avatars/default.jpg';
        $avatar->save();

        $avatars = Avatar::all();
        return view('task.avatar.avatar',['avatars' => $avatars]);
    }

    public function destroy(string $id)
    {

    }
}
