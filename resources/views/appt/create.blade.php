@extends('layouts.master')

@section('barbershop')
    <h4>Schedule An Appointment</h4>

    <form id="needs-validation" method="POST" action="/appt" novalidate>
      {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp"
                   placeholder="Name..." required>
          <!--  <div class="invalid-feedback">
            Please enter your name.
            </div> -->
        </div>
        <!-- barbershop selector -->
        <div class="form-group">
            <label for="barbershop">Barbershop:</label>
            <select class="form-control" name="barbershop" id="barbershop">
                @foreach($barbershops as $barbershop)
                    <option>{{ $barbershop->barbershopName }}</option>
                @endforeach
            </select>
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
        <!-- haircut or haircut & shampoo -->
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                       checked>
                Haircut </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                Haircut &amp; Shampoo
            </label>
        </div>
        <!-- submit -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        @if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                         @foreach($errors->all() as $error)
                             <li>{{ $error }}</li>
                         @endforeach
                    </ul>
                </div><!-- /.alert alert-danger -->
            </div><!-- /.form-group -->
        @endif
    </form>
@endsection
