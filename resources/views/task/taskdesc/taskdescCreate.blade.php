@extends('layouts.user_type.auth')

@section('content')

    <div class="wrapper">
        <form action="{{ route('taskdesc.store') }}" method="post">
            @csrf
            <input type="text" placeholder="description" name="description">

            <select name="task_id" id="tasks">
                @foreach($tasks as $task)
                    <option value="{{ $task->id }}"> {{ $task->name }} </option>
                @endforeach
            </select>
            <input type="submit" value="Create">
        </form>
    </div>
@endsection
