@extends('layouts.user_type.auth')

@section('content')
    <div class="wrapper">
        <form action="{{ route('comments.update', ['id' => $taskComment->id]) }}" method="post">
            @csrf @method('put')
            <input type="text" placeholder="task_id" name="task_id" value="{{ $taskComment -> task_id }}">
            <input type="text" placeholder="comment_id" name="comment_id" value="{{ $taskComment -> comment_id }}">

            <input type="text" placeholder="description" name="description" value="{{ $comment -> description }}">
            <input type="text" placeholder="user_id" name="user_id" value="{{ $comment -> user_id }}">

            <input type="text" placeholder="user_id" name="name" value="{{ $task -> name }}">
            <input type="text" placeholder="status_id" name="status_id" value="{{ $task -> status_id }}">
            <input type="text" placeholder="project_id" name="project_id" value="{{ $task -> project_id }}">

            <input type="submit" value="Create">
        </form>
    </div>
@endsection
