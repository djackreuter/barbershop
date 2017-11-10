@extends('layouts.master')

@section('content')
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