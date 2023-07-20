@extends('layouts.user_type.auth')

@section('content')
    <div class="wrapper">
        <form action="{{ route('projects.store')}}" method="post">
            @csrf
            <input type="text" placeholder="project" name="project">
            <select name="creator_id" id="creator_id">
                @foreach($users as $user)
                    <option value="{{ $user->id }}"> {{ $user->name }} </option>
                @endforeach
            </select>
            <input type="submit" value="Create">
        </form>
    </div>
@endsection
