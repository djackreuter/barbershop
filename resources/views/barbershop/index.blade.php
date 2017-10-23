@extends('layouts.master')

@section('barbershop')
    <h1>Barbershops</h1>

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
