@extends('layouts.user_type.auth')

@section('content')

    <div class="wrapper">
        <form action="{{ route('photoTask.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <select name="task_id" id="tasks">
                @foreach($tasks as $task)
                    <option value="{{ $task->id }}"> {{ $task->name }} </option>
                @endforeach
            </select>
            <input type="file" placeholder="photo" name="photo">
            <input type="submit" value="Create">
        </form>
    </div>
@endsection
