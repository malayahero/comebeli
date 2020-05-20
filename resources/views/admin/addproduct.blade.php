@extends('layouts.admin.master')
@section('content-form')	
		<form method="post" action="{{route('addproductPage')}}">
			@csrf		
			<div class="form-group">
			<label for="product_name">Product Name:</label>
			<input type="text" name="product_name">
			</div>
    		<br />
    		<div class="form-group">
			<label for="product_description">Product Description:</label>
			<textarea name="product_description"></textarea>
			</div>
			<br />
			<div class="form-group">
			<label for="sku_number">Sku Number:</label>
			<input type="Number" name="sku_number">
			</div>
			<br />
			<div class="form-group">
			<label for="spu_number">Spu Number:</label>
			<input type="Number" name="spu_number">
			</div>
			<br />
			<div class="form-group">
			<label for="product_quantity">Product Quantity:</label>
			<input type="Number" name="product_quantity">
			</div>
			<br />
			<div class="form-group">
			<label for="product_cost">Product Cost:</label>
			<input type="Number" name="product_cost">
			</div>
			<br />
			<div class="form-group">
			<label for="product_price">Product Price:</label>
			<input type="Number" name="product_price">
			</div>
			<br />
			<div class="form-group">
			<label for="product_size">Product Size:</label>
			<input type="text" name="product_size">
			</div>
			<br />
			<div class="custom-file">
		    <input type="file" class="custom-file-input" name="product_photos" id="customFile">
		    <label class="custom-file-label" for="customFile">Choose a file</label>
		  </div>
		  <br />
			<div class="form-group">
		   <label for="Supplier">Choose A Supplier:</label>
				<select id="supplier" name="supplier" >
				  <option value="ChinaBrands">ChinaBrands</option>
				  <option value="Alibaba">Alibaba</option>
				  <option value="MalaysiaB2B">MalaysiaB2B</option>
				  <option value="Own Product">Own Product</option>
				</select>
			</div>
				<br />
				<div class="form-group">
			<label for="warehouse">Choose A warehouse:</label>
				<select id="warehouse" name="warehouse" >
				  <option value="ChinaBrands">ChinaBrands</option>
				  <option value="Alibaba">Alibaba</option>
				  <option value="MalaysiaB2B">MalaysiaB2B</option>
				  <option value="Own Product">Malaysia</option>
				</select>
			</div>
				<br />
			<button type="submit">submit</button>
		</form>
	
@endsection