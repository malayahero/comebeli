<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //nak buat untuk usser nanti
	public function product(){
    	$product = Product::all();
    	return view('Users.product',compact('product'));
    	// dd($product);
    }
    
    public function show($id){
    	$product = Product::findOrFail($id);
    	dd($product);
    }
}
