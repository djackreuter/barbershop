@extends('layouts.master')

@section('content')
	<form>
		{{ csrf_field() }}
		<!-- name -->
		<div class="form-group">
			<label for="name">Barbershop Name</label>
			<input type="text" class="form-control" placeholder="Name..." required>
		</div>
		<!-- email -->
		<div class="form-group">
			<label for="email">Barbershop Email</label>
			<input type="email" class="form-control" placeholder="Email..." required>
		</div>
		<!-- price -->
		<div class="form-group">
			<label for="price">How much does a haircut cost?</label>
			<input type="text" class="form-control" id="enterPrice" placeholder="xx.xx">
		</div>
		<!-- bio -->
		<div class="form-group">
			<label for="bio">Tell us about your barbershop</label>
			<textarea class="form-control" rows="3" placeholder="500 characters max"></textarea>
		</div>
		  <!-- submit -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>

        @include('layouts.errors')
	</form>
@endsection