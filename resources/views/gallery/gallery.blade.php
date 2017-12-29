@extends ('master')

@section ('content')


	<br><h1>Gallery</h1><br>
	@foreach($images as $image)
	<img src="/digital/uploads/{{ $image->image_name }}" style="width: 200px; height: 200px;"" alt="" onclick="add_id({{ $image->id }}, this)">

	@endforeach

<form method="POST" action="/digital/public/order" id="order_form">
		{{ csrf_field() }}
	<input type="hidden" name="ids" id="ids"><br>

	<button onclick="addOrder()" class="btn btn-primary" id="order_btn">Order</button><br>
		@if( Session::has( 'success' ))
    		{{ Session::get( 'success' ) }}
    	@endif

</form>
	<script type="text/javascript">
		
		var ids=[];
		function add_id(id, el){
			ids.push(id);
			document.getElementById('ids').value = ids.join(',');
			el.style.border="2px solid blue";
		}

		function addOrder()
		{
			document.getElementById('order_form').submit();

		}

	</script>

@endsection	
