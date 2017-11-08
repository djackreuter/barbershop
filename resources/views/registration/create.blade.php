@extends('layouts.master')

@section('content')
<h1>Register Your Barbershop!</h1>
<hr>
<div class="card">
	<form method="POST" action="/register" novalidate>
		{{ csrf_field() }}
		<!-- name -->
		<div class="form-group">
			<label for="name">Barbershop Name</label>
			<input type="text" class="form-control regform" placeholder="Name..." name="name" required>
		</div>
		<!-- email -->
		<div class="form-group">
			<label for="email">Barbershop Email</label>
			<input type="email" class="form-control regform" placeholder="Email..." name="email" required>
		</div>
		<!-- password -->
		<div class="form-group">
			<label for="password">Create Password</label>
			<input type="password" class="form-control create-password" name="password" required>
		</div>
		<!-- password confirm -->
		<div class="form-group">
			<label for="password_confirmation">Re-type Password</label>
			<input type="password" class="form-control create-password" name="password_confirmation" required>
		</div>
		<!-- price -->
		<div class="form-group">
			<label for="price">How much does a haircut cost?</label>
			<input type="number" class="form-control" id="enterPrice" placeholder="xx.xx" name="price" required>
		</div>
		<!-- bio -->
		<div class="form-group">
			<label for="bio">Tell us about your barbershop</label>
			<textarea class="form-control regform" rows="3" placeholder="500 characters max" name="bio"></textarea>
		</div>
		  <!-- submit -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>

        @include('layouts.errors')
	</form>
</div>
@endsection