@extends('layouts.user_type.auth')

@section('content')

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Projects table</h6>

                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-center mb-0">
                                    <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Project
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Budget
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Status
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                            Completion
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                            Comments
                                        </th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <a href="{{route('task.create')}}">CREATE NEW</a>
                                    @foreach($tasks as $task)

                                        <tr>
                                            <td>
                                                {{ $task -> id }}
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0"> {{ $task -> name }} </p>
                                            </td>

                                            <td>
                                                <span class="text-xs font-weight-bold"></span>
                                                post:{{ $task -> user -> name }}`s
                                            </td>
                                            <td class="align-middle text-center">
                                                status:{{ $task -> status -> name }}
                                            </td>
                                            <td class="align-middle">
                                                <ul>
                                                    @foreach($task -> assigneds as $assigned)
                                                        <li>{{$assigned -> name}}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td><h5>role</h5>
                                                <ul>
{{--                                                    @foreach($task-> rolesfind as $role)--}}
{{--                                                        <li>{{$role->name}}</li>--}}
{{--                                                    @endforeach--}}
                                                </ul>
                                            </td>
                                            <td>
                                                @foreach($task -> comments as $comment)
                                                    <ul>
                                                        <li>{{$comment -> description }}</li>
                                                        <li>
                                                            <?php $user = App\Models\User::find($comment->user_id); ?>
                                                            {{ $user -> name }}
                                                        </li>
                                                    </ul>
                                                @endforeach
                                            <td>
                                                <a href="{{ route('task.edit', ['id' => $task->id]) }}">EDIT</a>
                                                <form action="{{route('task.destroy', ['id'=>$task ->id])}}" method="post">
                                                    @csrf @method('delete')
                                                    <button type="Submit">Delete</button>
                                                </form></td>
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
