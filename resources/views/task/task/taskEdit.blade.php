@extends('layouts.user_type.auth')

@section('content')

    <div class="wrapper">
        <form action="{{ route('task.update', ['id' => $task->id]) }}" method="post">
            @csrf @method('put')
            <input type="text" placeholder="name" name="name" value="{{ $task -> name }}">
            <input type="text" placeholder="user_id" name="user_id" value="{{ $task -> user_id }}">
            <input type="text" placeholder="status_id" name="status_id" value="{{ $task -> status_id }}">
            <input type="text" placeholder="project_id" name="project_id" value="{{ $task -> project_id }}">
            <input type="submit" value="Create">
        </form>
    </div>
@endsection
