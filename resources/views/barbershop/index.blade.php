@extends('layouts.master')

@section('content')
    <h1>Barbershops</h1>
    <hr>
    <div class="row">
        <div class="col">
            <ul>
            @foreach($barbershops as $barbershop)
                <li>
                    <a class="shops-list" href="/barbershops/{{ $barbershop->id }}">
                        {{ $barbershop->barbershopName }}
                    </a>
                </li>
            @endforeach
            </ul>
        </div><!-- /.col -->
        <div class="col">
            <img class="image" src="/images/chop.png" alt="scissors">
        </div><!-- /.col -->    
    </div><!-- /.row -->
@endsection
