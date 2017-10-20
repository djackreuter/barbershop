@extends('layouts.master')

@section('barbershop')
    <h1>Barbershops</h1>

    <ul>
        @foreach($barbershop as $barbershops)
            <li>
                <a href="/barbershops/{{ $barbershops->id }}">
                    {{ $barbershops->barbershopName }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection