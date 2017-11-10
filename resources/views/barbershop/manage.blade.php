@extends('layouts.master')

@section('content')
<h1>Manage Appointments</h1>
<hr>
    <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Appointment Time</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barbershop->appts as $appt)
                    <tr>
                        <td>{{ $appt->apptCustomerName }}</td>
                        <td>{{ date('H:i', strtotime($appt->apptTime)) }}</td>
                        <td><a href="#">x</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection