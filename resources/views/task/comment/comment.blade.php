@extends('layouts.user_type.auth')

@section('content')

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Authors table</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Author
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Function
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Employed
                                        </th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <a href="{{route('comments.create')}}">Create</a>
                                    @foreach($taskComments as $taskComment)
                                        <tr>
                                            <td>task id: {{ $taskComment->task->id }}</td>
                                            <td>task name: {{ $taskComment->task->name }}</td>
                                            <td>project name: {{ $taskComment->task->project->project }}</td>
                                            <td>comments:{{ $taskComment -> comment->description }},</td>
                                            <td><button><a href="{{ route('comments.edit', ['id' => $taskComment->id]) }}">EDIT</a></button></td>
                                            <td>
                                                <form action="{{route('comments.destroy', ['id'=>$taskComment ->id])}}" method="post">
                                                    @csrf @method('delete')
                                                    <button type="Submit">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
{{--<td style="color: red">user name:{{ $comment->showid->name }}</td>--}}
{{--<td>user id: {{ $comment->showid->id }}</td>--}}
{{--<td>id comment: {{ $comment -> id }}</td>--}}
{{--                                        <td>task id: {{ dd($comment) }}</td>--}}
{{--<td>comment description: {{ $comment -> description }}</td>--}}
{{--<td>--}}
{{--    <a href="{{ route('comments.edit', ['id' => $comment->id]) }}">EDIT</a>--}}
{{--</td>--}}
{{--<td>--}}
{{--    <form action="{{route('comments.destroy', ['id'=>$comment ->id])}}"--}}
{{--          method="post">--}}
{{--        @csrf @method('delete')--}}
{{--        <button type="Submit">Delete</button>--}}
{{--    </form>--}}
{{--</td>--}}
