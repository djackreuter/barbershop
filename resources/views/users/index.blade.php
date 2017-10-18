@extends('layout')

@section('content')
    <h1>Users</h1>
    <ul>
        @foreach ($users as $user)
            <li>
                <a href="/users/{{ $user->id }}">
                    {{ $user->userName }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection