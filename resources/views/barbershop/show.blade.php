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
            <div class="invalid-feedback">
                Please enter your name.
            </div>
        </div>
        <!-- appt time selector -->
        <div class="form-group">
            <label for="exampleFormControlSelect2">Example multiple select</label>
            <select multiple class="form-control" id="exampleFormControlSelect2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
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
