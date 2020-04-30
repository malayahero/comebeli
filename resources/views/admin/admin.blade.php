<!DOCTYPE>
<html>
	<head></head>
	<body>
		
		@foreach($product as $products)
		<ul><li><a href="/admin/product/{{$products->id}}">{{ $products->product_name }}</a></li></ul>
		@endforeach
	</body>
</html>