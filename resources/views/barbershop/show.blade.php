@extends('layouts.master')

@section('content')
    <h1>{{ $barbershop->barbershopName }}</h1>
    <hr>
    <p>About Us: {{ $barbershop->barbershopBio }}</p>

     <form id="needs-validation" method="POST" action="/barbershops/{{ $barbershop->id }}/appt" novalidate>
      {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp"
                   placeholder="Name..." required>
        </div>
        <!-- appt time selector -->
        <div class="form-group">
            <label for="apptTime">Choose an appointment time:</label>
            <select multiple class="form-control" name="apptTime" required>
                <option>09:00</option>
                <option>10:00</option>
                <option>11:00</option>
                <option>12:00</option>
                <option>13:00</option>
                <option>14:00</option>
                <option>15:00</option>
                <option>16:00</option>
                <option>17:00</option>
                <option>18:00</option>
                <option>19:00</option>
                <option>20:00</option>
            </select>
        </div>
        <!-- submit -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        @include('layouts.errors')
    </form>

    <table class="table table-bordered">
        <thead>
    		<tr>
	    		<th scope="col">Customer Name</th>
	    		<th scope="col">Appointment Time</th>
    		</tr>
        </thead>
        <tbody>
        	@foreach($barbershop->appts as $appt)
                <tr>
                    <td>{{ $appt->apptCustomerName }}</td>
                    <td>{{ date('H:i', strtotime($appt->apptTime)) }}</td>
                </tr>
    		@endforeach
    	</tbody>
    </table>
@endsection
