@extends('layouts.user_type.auth')

@section('content')

    <a href="{{route('status.create')}}">Create</a>
    @foreach($statuses as $status)
        <div>
            {{ $status -> name }} :  {{ $status -> is_active }}

            <a href="{{ route('status.edit', ['id' => $status->id]) }}">EDIT</a>

            <form action="{{route('status.destroy', ['id'=>$status ->id])}}" method="post">
                @csrf @method('delete')
                <button type="Submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection
