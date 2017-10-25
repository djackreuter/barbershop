@extends('layouts.master')

@section('barbershop')
    <h1>{{ $barbershop->barbershopName }}</h1>
    <hr>
    <p>About Us: {{ $barbershop->barbershopBio }}</p>
    <a href="{{ URL::to('barbershops/create') }}" class="btn btn-primary btn-lg" role="button">Schedule An Appointment</a>
@endsection
