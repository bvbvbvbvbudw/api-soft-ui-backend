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
                                        @foreach($avatars as $avatar)
                                            <tr>
                                                <td>id avatar{{$avatar -> id}}</td>
                                                <td>url avatar:{{$avatar -> avatar}}</td>
                                                <td>user avatar: {{$avatar -> user -> name}}</td>
                                                <td>
                                                    <img src="{{ asset('storage/' . $avatar->avatar) }}" style="width: 50px;height: 50px;border-radius: 50%" alt="Аватар пользователя">
                                                </td>
                                                <td><button form="avatar-form-{{$avatar->id}}" type="submit">default avatar</button></td>

                                                <form id="avatar-form-{{$avatar->id}}" action="{{route('avatars.update', ['id' => $avatar->id])}}" method="POST" style="display: none;">
                                                    @method('POST')
                                                    @csrf
                                                </form>
                                                <td>
                                                    <form action="{{ route('avatars.destroy', ['id' => $avatar->id]) }}" method="post">
                                                        @csrf
                                                        @method('post')
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
