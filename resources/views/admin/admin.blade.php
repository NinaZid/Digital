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
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="text" class="form-control" id="email" name="email" required>
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
		<h1>Gallery</h1>
		<div>
			<form method="POST" action="/digital/public/gallery" enctype="multipart/form-data">
					{{ csrf_field() }}
				<div>
					<p>Select image to upload</p><br>
					<input type="file" name="fileToUpload" id="fileToUpload"><br>
    				<input type="submit" value="Upload Image" name="submit">
				</div>
			</form>
					
		</div>
	</div>
	<div>
		@foreach($images as $image)
	<img src="/digital/uploads/{{ $image->image_name }}" alt="">

	@endforeach

	</div>
	</div>
</body>
</html>