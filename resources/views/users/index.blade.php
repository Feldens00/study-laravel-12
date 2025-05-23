@extends('layouts.app')
@section('title', 'Users')

@section('content')
    <div class="container">
        <h1 class="title">Users</h1>
        <img src="{{ Vite::asset('resources/images/php-img.webp') }}" alt="PHP" style="width: 200px; height: auto;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        {{-- <td><a href="{{ route('users.show', $user->id) }}">View</a></td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- {{ $users->links() }} --}}
    </div>
@endsection
