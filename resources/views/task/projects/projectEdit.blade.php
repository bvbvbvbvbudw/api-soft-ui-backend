@extends('layouts.user_type.auth')

@section('content')
    <div class="wrapper">
        <form action="{{ route('projects.update', ['id' => $project ->id]) }}" method="post">
            @csrf @method('put')
            <input type="text" placeholder="task_id" name="project" value="{{ $project -> project }}">
            <input type="text" placeholder="comment_id" name="creator_id" value="{{ $project -> creator_id }}">

            <input type="submit" value="Create">
        </form>
    </div>
@endsection
