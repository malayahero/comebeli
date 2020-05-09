<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;

class OrderController extends Controller
{
    //
    public function index(){
    	$orders = new Order();
    	return view('admin.orderlist',compact('orders'));
    }

    public function assignorder(){
        

    }

    public function unassignedorder(){

    }

    public function taskorder(){

    }

    public function finishorder(){

    }
}
