<!DOCTYPE>
<html>
	<head></head>
	<body>
		<h1>this show page</h1>
		<br />
		{{$product->product_name}}
		<br />
		{{{$product->supplier}}}
	<br />
		<button><a href="/admin/product/{{$product->id}}/updateproduct"></a>Edit</button>
	</body>
</html>