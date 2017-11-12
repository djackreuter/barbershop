@extends('layouts.master')

@section('content')
<h1>Manage Appointments</h1>
<hr>
    <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" class="authTable">Customer Name</th>
                    <th scope="col" class="authTable">Appointment Time</th>
                    <th scope="col" class="authTable">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barbershop->appts as $appt)
                    <tr>
                        <td class="authTable">{{ $appt->apptCustomerName }}</td>
                        <td class="authTable">{{ date('H:i', strtotime($appt->apptTime)) }}</td>
                        <td class="authTable">{!! Form::open(['route' => ['delete.appt', $appt->id], 'method' => 'delete' ]) !!}
                            {{ Form::submit('X', ['class' => 'btn btn-danger delete-appt']) }}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection