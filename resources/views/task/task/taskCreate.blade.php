@extends('layouts.user_type.auth')

@section('content')

    <div class="wrapper">
        <form action="{{ route('task.store') }}" method="post">
            @csrf
            <input type="text" placeholder="name" name="name">
            <input type="text" placeholder="user_id" name="user_id">
            <input type="text" placeholder="status_id" name="status_id">
            <input type="text" placeholder="project_id" name="project_id">
            <input type="submit" value="Create">
        </form>
    </div>
@endsection
