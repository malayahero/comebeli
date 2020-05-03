<!DOCTYPE>
<html>
	<head></head>
	<body>
		<h1>Add Product</h1>
		<form method="post" action="/admin/product">
			@csrf			
			<label for="product_name">Product Name:</label>
			<input type="text" name="product_name">
    		<br />
			<label for="product_description">Product Description:</label>
			<textarea name="product_description"></textarea>
			<br />
			<label for="sku_number">Sku Number:</label>
			<input type="Number" name="sku_number">
			<br />
			<label for="spu_number">Spu Number:</label>
			<input type="Number" name="spu_number">
			<br />
			<label for="product_quantity">Product Quantity:</label>
			<input type="Number" name="product_quantity">
			<br />
			<label for="product_cost">Product Cost:</label>
			<input type="Number" name="product_cost">
			<br />
			<label for="product_price">Product Price:</label>
			<input type="Number" name="product_price">
			<br />
			<label for="product_size">Product Size:</label>
			<input type="text" name="product_size">
			<br />
		   <label for="Supplier">Choose A Supplier:</label>
				<select id="supplier" name="supplier" >
				  <option value="ChinaBrands">ChinaBrands</option>
				  <option value="Alibaba">Alibaba</option>
				  <option value="MalaysiaB2B">MalaysiaB2B</option>
				  <option value="Own Product">Own Product</option>
				</select>
				<br />
			<label for="warehouse">Choose A warehouse:</label>
				<select id="warehouse" name="warehouse" >
				  <option value="ChinaBrands">ChinaBrands</option>
				  <option value="Alibaba">Alibaba</option>
				  <option value="MalaysiaB2B">MalaysiaB2B</option>
				  <option value="Own Product">Malaysia</option>
				</select>
				<br />
			<button type="submit">submit</button>
		</form>
		
	</body>
</html>