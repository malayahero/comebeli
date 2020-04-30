<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

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
    	return view('admin.addproduct');
    }

     public function edit($id){
        $product = Product::findOrFail($id);
        return view('admin.editproduct',compact('product'));
    }

    public function addproduct(){
     $product = Product::update(request(['product_name' => 'product_name','product_description' => 'product_description','sku_number' => 'sku_number','spu_number' => 'spu_number','product_quantity' =>'product_quantity','product_price' => 'product_price','product_cost' => 'product_cost','product_size' => 'product_size','supplier' => 'supplier','warehouse' => 'warehouse']));
           return redirect('/admin',compact('product'));

          }

     public function updateproduct(){
       $product = Product::update(request(['product_name' => 'product_name','product_description' => 'product_description','sku_number' => 'sku_number','spu_number' => 'spu_number','product_quantity' =>'product_quantity','product_price' => 'product_price','product_cost' => 'product_cost','product_size' => 'product_size','supplier' => 'supplier','warehouse' => 'warehouse']));
    	return redirect('/admin',compact('product'));
        // return redirect('/');
    }

    public function destroy(){
    	$product->delete();
    	dd($product);
    }
      
}
