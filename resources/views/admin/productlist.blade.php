<!DOCTYPE>
<html>
	<head></head>
	<body>		
		@foreach($product as $products)
		<div class="row">
		  <div class="column"><ul><li><a href="/admin/product/{{$products->id}}">{{ $products->product_name }}</a></li></ul></div>
		</div>
		@endforeach
	</body>
</html>