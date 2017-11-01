@extends('layouts.master')

@section('barbershop')
    <h1>{{ $barbershop->barbershopName }}</h1>
    <hr>
    <p>About Us: {{ $barbershop->barbershopBio }}</p>
    <table class="table table-bordered">
    	<thead>
    		<tr>
	    		<th>Customer Name</th>
	    		<th>Appointment Time</th>
    		</tr>
    	</thead>
    	@foreach($appt as $appts)
			<td>{{ $appts->apptCustomerName }}</td>
			<td>{{ $appts->apptDateTime }}</td>
    	@endforeach
    	
    </table>
    <a href="{{ URL::to('appt/create') }}" class="btn btn-primary btn-lg" role="button">Schedule An Appointment</a>
@endsection
