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
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <a href="{{route('projects.create')}}">Create</a>
                                    @foreach($projects as $project)
                                        <tr>
                                            <td>{{$project->id}}</td>
                                            <td>{{$project->project}}</td>
                                            <td>{{$project->creator_id}}</td>
                                            <td>
                                                @foreach ($project->users as $user)
                                                    {{$user->name}},
                                                    <form action="{{ route('role.destroy', $project->users->pluck('pivot.project_id')->toArray()) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit">Delete</button>
                                                    </form>
                                                @endforeach
                                            </td>
                                            <td>
                                                <button>
                                                    <a href="{{ route('adduser.create', ['id' => $project->id, 'creator_id' => $project -> creator_id]) }}">ADD USER</a>
                                                </button>
                                            </td>
                                            <td>
                                                <button>
                                                    <a href="{{ route('projects.edit', ['id' => $project->id]) }}">EDIT</a>
                                                </button>
                                            </td>
                                            <td>
                                                <form action="{{route('projects.destroy', ['id'=>$project->id])}}" method="post">
                                                    @csrf @method('delete')
                                                    <button type="submit">Delete</button>
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
