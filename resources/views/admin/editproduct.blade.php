<!DOCTYPE>
<html>
	<head></head>
	<body>
		<h1>Update Product:</h1>
		<form method="post" action="/admin/product/{{$product->id}}">
			@csrf
			@method('PATCH')
			<label for="product_name">Product Name:</label>
			<input type="text" name="product_name" value="{{$product->product_name}}">
    		<br />
			<label for="product_description">Product Description:</label>
			<textarea name="product_description" >{{$product->product_description}}</textarea>
			<br />
			<label for="sku_number">Sku Number:</label>
			<input type="Number" name="sku_number" value="{{$product->sku_number}}">
			<br />
			<label for="spu_number">Spu Number:</label>
			<input type="Number" name="spu_number" value="{{$product->spu_number}}">
			<br />
			<label for="product_quantity">Product Quantity:</label>
			<input type="Number" name="product_quantity" value="{{$product->product_quantity}}">
			<br />
			<label for="product_cost">Product Cost:</label>
			<input type="Number" name="product_cost" value="{{$product->product_cost}}">
			<br />
			<label for="product_price">Product Price:</label>
			<input type="Number" name="product_price" value="{{$product->product_price}}">
			<br />
			<label for="product_size">Product Size:</label>
			<input type="text" name="product_size" value="{{$product->product_size}}">
			<br />
			<div class="custom-file">
		    <input type="file" class="custom-file-input" name="product_photos" id="customFile">
		    <label class="custom-file-label" for="customFile">Choose a file</label>
		  </div>
		  <br />
		   <label for="Supplier">Choose A Supplier:</label>
				<select id="supplier" name="supplier" value="{{$product->supplier}}" >
				  <option value="ChinaBrands">ChinaBrands</option>
				  <option value="Alibaba">Alibaba</option>
				  <option value="MalaysiaB2B">MalaysiaB2B</option>
				  <option value="Own Product">Own Product</option>
				</select>
				<br />
			<label for="warehouse">Choose A warehouse:</label>
				<select id="warehouse" name="warehouse" value="{{$product->warehouse}}" >
				  <option value="ChinaBrands">ChinaBrands</option>
				  <option value="Alibaba">Alibaba</option>
				  <option value="MalaysiaB2B">MalaysiaB2B</option>
				  <option value="Own Product">Malaysia</option>
				</select>
				<br />
			<button type="submit">submit</button>
		</form>
		
		<form>
			<button>Delete</button>
		</form>
	</body>
</html>