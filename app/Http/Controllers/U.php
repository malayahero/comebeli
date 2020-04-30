<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class U extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addproduct',compact('product'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product = Product::create(request(['product_name' => 'product_name','product_description' => 'product_description','sku_number' => 'sku_number','spu_number' => 'spu_number','product_quantity' =>'product_quantity','product_price' => 'product_price','product_cost' => 'product_cost','product_size' => 'product_size','supplier' => 'supplier','warehouse' => 'warehouse']));
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Product::findOrFail($id);
        return view('admin.showproduct',compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::findOrFail($id);
        return view('admin.editproduct',compact('product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = Product::update(request(['product_name' => 'product_name','product_description' => 'product_description','sku_number' => 'sku_number','spu_number' => 'spu_number','product_quantity' =>'product_quantity','product_price' => 'product_price','product_cost' => 'product_cost','product_size' => 'product_size','supplier' => 'supplier','warehouse' => 'warehouse']));
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
