<!DOCTYPE>
<html>
	<head></head>
	<body>
		
		<form method="post" action="/admin/product/">
			@method('PATCH')
			@csrf
			<label for="product_name">Product Name:</label>
			<input type="text" name="product_name" value="{{$product->product_name}}">

			<label for="product_description">Product Description:</label>
			<textarea name="product_description">{{$product->product_description}}</textarea>

			<label for="sku_number">Sku Number</label>
			<input type="Number" name="sku_number" value="{{$product->sku_number}}">

			<label for="spu_numbber">Spu Number</label>
			<input type="Number" name="spu_numbber" value="{{$product->spu_number}}">

			<label for="product_quantity">Product Quantity</label>
			<input type="Number" name="product_quantity" value="{{$product->product_quantity}}">

			<label for="product_cost">Product Cost</label>
			<input type="Number" name="product_cost" value="{{$product->product_cost}}">

			<label for="product_price">Product Price</label>
			<input type="Number" name="product_price" value="{{$product->product_price}}">

			<label for="product_size">Product Size</label>
			<input type="text" name="product_size" value="{{$product->product_size}}">

			
			<label for="supplier">Choose A Supplier:</label>
				<select id="cars" name="supplier" >
				  <option value="ChinaBrands">ChinaBrands</option>
				  <option value="Alibaba">Alibaba</option>
				  <option value="MalaysiaB2B">MalaysiaB2B</option>
				  <option value="audi">Audi</option>
				</select>

			<label for="warehouse">Choose A Supplier:</label>
				<select id="cars" name="warehouse" >
				  <option value="ChinaBrands">ChinaBrands</option>
				  <option value="Alibaba">Alibaba</option>
				  <option value="MalaysiaB2B">MalaysiaB2B</option>
				  <option value="audi">Audi</option>
				</select>
			<button type="submit">submit</button>
		</form>
		
	</body>
</html>