@extends('layouts.master')

@section('content')
    <h1>Barbershops</h1>
    <hr>
    <ul>
        @foreach($barbershops as $barbershop)
            <li>
                <a href="/barbershops/{{ $barbershop->id }}">
                    {{ $barbershop->barbershopName }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
