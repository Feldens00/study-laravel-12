@extends('layouts.app')
@section('title', 'Mostrando Usuário' . $user->name)

@section('content')
    <div class="container">
        @if (!$user)
            <h1 class="title">User not found</h1>
            <a href="{{ route('users.index') }}">Back to Users</a>
        @else
            <h1>Mostrar Usuário {{ $user->name }}</h1>
            
        @endif
    </div>
@endsection
