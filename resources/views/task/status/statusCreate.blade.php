@extends('layouts.user_type.auth')

@section('content')

    <div class="wrapper">
        <form action="{{ route('status.store') }}" method="post">
            @csrf
            <input type="text" placeholder="name" name="name">
            <input type="text" placeholder="is_active" name="is_active">
            <input type="submit" value="Create">
        </form>
    </div>
@endsection
