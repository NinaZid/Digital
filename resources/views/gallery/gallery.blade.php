<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Gallery</h1>
	@foreach($images as $image)
	<img src="/digital/uploads/{{ $image->image_name }}" alt="" onclick="add_id({{ $image->id }}, this)">

	@endforeach

<form method="POST" action="/digital/public/order" id="order_form">
		{{ csrf_field() }}
	<input type="hidden" name="ids" id="ids">

	<button onclick="addOrder()" class="btn btn-primary">Order</button>

</form>
	<script type="text/javascript">
		
		var ids=[];
		function add_id(id, el){
			ids.push(id);
			document.getElementById('ids').value = ids.join(',');
			el.style.border="1px dashed black";
		}

		function addOrder()
		{
			document.getElementById('order_form').submit();

		}

	</script>
</body>
</html>