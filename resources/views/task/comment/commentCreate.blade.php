@extends('layouts.user_type.auth')

@section('content')

    <div class="wrapper">
        <form action="{{ route('comments.store') }}" method="post">
            @csrf
            <select name="task_id" id="tasks">
                @foreach($tasks as $task)
                    <option value="{{ $task->id }}"> {{ $task->name }} </option>
                @endforeach
            </select>
            <input type="text" placeholder="description" name="description">
            <select name="user_id" id="users">
                @foreach($users as $user)
                    <option value="{{ $user->id }}"> {{ $user->name }} </option>
                @endforeach
            </select>
            <input type="submit" value="Create">
        </form>
    </div>
@endsection
