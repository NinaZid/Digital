<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="main">
	<h2>Add new user</h2>
	<div>
		<form method="POST" action="/digital/public/admin">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name">Username:</label>
				<input type="text" class="form-control" id="name" name="name" required>
			</div>
			<div>
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" name="password" required>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add user</button>
			</div>
		</form>
	</div>
	<div>
		<h1>Here goes gallery</h1>
	</div>
	</div>
</body>
</html>