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
{{--                                    {{dd($photos)}}--}}
                                    <a href="{{route('photoTask.create')}}">Create</a>
                                    @foreach($photos as $photo)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('storage/' . $photo->photo) }}" style="width: 250px;height: 250px;object-fit: contain" alt="Аватар пользователя">
                                            </td>
                                            <td>task name: {{ $photo->task->name }}</td>
                                            <td>
                                                <form action="{{route('photoTask.destroy', ['id'=>$photo ->id])}}" method="post">
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
