<!DOCTYPE>
<html>
	<head></head>
	<body>
		@foreach($product as $products)
		<ul>
		<li><p><img src="https://www.harianhaluan.com/assets/berita/original/62940714042-ilustrasi_kucing.jpg" alt="Example" width="193" height="130"></p>
<br /><a href="/shop/{{$products->id }}">{{ $products->product_name }} <br/>{{$products->product_price }}</a><br /><a href="">add to cart</a></li>
	</ul>
		@endforeach
	</body>
</html>