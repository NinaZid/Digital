@extends ('master')

@section ('content')

	<div id="main">

	<div>
		<h1>Gallery</h1>
		<div>
		@foreach($images as $image)
			<img src="/digital/uploads/{{ $image->image_name }}" alt="" style="width: 200px; height: 200px;">
		@endforeach
		</div>
		
		<br><hr><br>
		<div id="image_div">
			<form method="POST" action="/digital/public/gallery" enctype="multipart/form-data">
					{{ csrf_field() }}
				<div>
					<h2>Upload images:</h2><br>
					<input type="file" name="fileToUpload" id="fileToUpload">
    				<input type="submit" value="Upload Image" name="submit" id="image_submit">
				</div>
			</form>
		</div>
	</div>
	
	<br><hr><br>
	<h1>Add new user</h2>
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
			</div><br>
			<div class="form-group">
				<button type="submit" class="btn btn-primary" id="add_user">Add user</button>
			</div>
		</form>
	</div>

	</div>

@endsection