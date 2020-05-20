<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class AdminController extends Controller
{
    //
    public function dashboard(){
    	if(Auth::user()->admin == true){

    	}else{
    		
    	}
    }   
  
}
