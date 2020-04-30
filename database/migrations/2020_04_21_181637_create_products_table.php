<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('user_id')->nullable()->unsigned();
            $table->string('product_name');
            $table->longtext('product_description');
            $table->integer('sku_number');
            $table->integer('spu_number');
            $table->integer('product_quantity');
            $table->float('product_cost');
            $table->float('product_price');
            $table->string('product_size');
            $table->string('supplier');
            $table->string('warehouse');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
