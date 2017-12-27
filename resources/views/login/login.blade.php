<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Login page</h1>

	<div class="col-sm-8">
		<form method="POST" action="/digital/public/login">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name">Username:</label>
				<input type="text" class="form-control" id="name" name="name" required>
			</div>
			<div>
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email" required>
			</div>
			<div>
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" name="password" required>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Sign in</button>
			</div>
			
		</form>
			
	</div>
</body>
</html>