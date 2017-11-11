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
                @foreach($timeSort as $time)
                    <tr>
                        <td class="authTable">{{ $time->apptCustomerName }}</td>
                        <td class="authTable">{{ date('H:i', strtotime($time->apptTime)) }}</td>
                        <td class="authTable delete-appt">{!! Form::open(['method' => 'delete', 'action' => ['ApptController@destroy', $appt->id ]]) !!}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection