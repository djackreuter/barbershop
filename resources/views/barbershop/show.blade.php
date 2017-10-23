@extends('layouts.master')

@section('barbershop')
<ul>
    <li>Barbershop: {{ $barbershop->barbershopName }}</li>
    <li>About Us: {{ $barbershop->barbershopBio }}</li>
</ul>
@endsection
