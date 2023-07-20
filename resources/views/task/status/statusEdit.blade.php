@extends('layouts.user_type.auth')

@section('content')

    <div class="wrapper">
        <form action="{{ route('status.update', ['id' => $status ->id]) }}" method="post">
            @csrf @method('put')
            <input type="text" placeholder="name" name="name" value="{{ $status -> name }}">
            <input type="text" placeholder="is_active" name="is_active" value="{{ $status -> is_active }}">
            <input type="submit" value="Create">
        </form>
    </div>
@endsection
