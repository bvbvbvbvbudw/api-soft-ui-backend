@extends('layouts.user_type.auth')

@section('content')

    <div class="wrapper">
        <form action="{{ route('informationTask.store') }}" method="post">
            @csrf
            <select name="task_id" id="tasks">
                @foreach($tasks as $task)
                    <option value={{ $task -> id }}> {{ $task->name }} </option>
                @endforeach
            </select>
            <input type="date" placeholder="deadline" name="deadline">
            <select name="user_assigned" id="user_assigned">
                @foreach($users as $user)
                    <option value={{ $user -> id }}> {{ $user->name }} </option>
                @endforeach
            </select>
            <select name="complexity" id="complexity">
                @foreach($comps as $comp)
                    <option value={{$comp -> id}}> {{ $comp->complexity }} </option>
                @endforeach
            </select>
            <input type="submit" value="Create">
        </form>
    </div>
@endsection
