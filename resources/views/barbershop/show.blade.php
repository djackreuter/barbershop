@extends('layouts.master')

@section('barbershop')
    <h1>{{ $barbershop->barbershopName }}</h1>
    <hr>
    <p>About Us: {{ $barbershop->barbershopBio }}</p>

    <h4>Schedule An Appointment</h4>

    <form id="needs-validation" novalidate>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="nameHelp"
                   placeholder="Name..." required>
            {{--<div class="invalid-feedback">--}}
                {{--Please enter your name.--}}
            {{--</div>--}}
        </div>
        <!-- appt time selector -->
        <div class="form-group">
            <label for="exampleFormControlSelect2">Choose an appointment time</label>
            <select multiple class="form-control" id="exampleFormControlSelect2" required>
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
