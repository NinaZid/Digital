@extends ('master')

@section('content')
<br><hr><br>
	<div class="col-sm-8" style="height: 400px;">
		<form method="POST" action="/digital/public/login">
			{{ csrf_field() }}
			<!-- <div class="form-group">
				<label for="name">Username:</label>
				<input type="text" class="form-control" id="name" name="name" required>
			</div> -->
			<div>
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email" required>
			</div>
			<div>
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" name="password" required>
			</div><br>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Sign in</button>
			</div>
			
		</form>
	</div>

	@endsection
