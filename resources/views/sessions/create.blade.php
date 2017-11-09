@extends('layouts.master')

@section('content')
	<h1>Login</h1>
	<hr>
	<div class="login">
		<div class="card">
			<form method="POST" action="/login" novalidate>
				{{ csrf_field() }}

				<div class="form-group">
					<label for="email">Email:</label>
					<input class="form-control" type="email" name="email" required>
				</div>

				<div class="form-group">
					<label for="password">Password:</label>
					<input class="form-control" type="password" name="password" required>
				</div>

				<div class="form-group">
			            <button type="submit" class="btn btn-primary">Login</button>
			    </div>

			        @include('layouts.errors')
				
			</form>
		</div><!-- /.card -->
	</div><!-- /.login -->
@endsection