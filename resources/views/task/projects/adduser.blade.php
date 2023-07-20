@extends('layouts.user_type.auth')

@section('content')
    <div class="wrapper">
        <form action="{{ route('adduser.store') }}" method="post">
            @csrf
            <input type="hidden" name="project_id" value="{{ request('id') }}">
            <input type="hidden" name="creator_id" value="{{ request('creator_id') }}">
            <select name="user_id" id="creator_id">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            <select name="access_level" id="">
                <option value="teamlead">Teamlead</option>
                <option value="teamworker">Teamworker</option>
            </select>
            <input type="submit" value="Create">
        </form>
    </div>
@endsection
