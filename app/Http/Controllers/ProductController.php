<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
class ProductController extends Controller
{
    //
    public function product(){
    	$product = Product::all();
    	return view('Users.product',compact('product'));
    }

     public function index(){
        $product = Product::all();
        return view('admin.admin',compact('product'));
    }
    
    public function customershow($id){
    	$product = Product::findOrFail($id);
    	return view('Users.showproduct',compact('product'));
    }

    public function show($id){
        $product = Product::findOrFail($id);
        return view('admin.showproduct',compact('product'));
    }

    public function addproductpage(){
    	return view('admin.addproduct',compact('product'));
    }

     public function edit($id){
        $product = Product::findOrFail($id);
        return view('admin.editproduct',compact('product'));
    }

    public function addproduct(){
     $product = Product::create(request(['product_name' => 'product_name','product_description' => 'product_description','sku_number' => 'sku_number','spu_number' => 'spu_number','product_quantity' =>'product_quantity','product_price' => 'product_price','product_cost' => 'product_cost','product_size' => 'product_size','supplier' => 'supplier','warehouse' => 'warehouse']));
           // return redirect('/admin',compact('product'));
             return dd($product);
          }

     public function updateproduct($id){
        $product = Product::findOrFail($id);
        $product->update(request(['product_name' => 'product_name','product_description' => 'product_description','sku_number' => 'sku_number','spu_number' => 'spu_number','product_quantity' =>'product_quantity','product_price' => 'product_price','product_cost' => 'product_cost','product_size' => 'product_size','supplier' => 'supplier','warehouse' => 'warehouse']));
    	// return redirect('/admin',compact('product'));
            return dd($product);
        // return redirect('/');
    }

    public function destroy(){
    	$product->delete();
    	dd($product);
    }
      
}
