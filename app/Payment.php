<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    public function users(){
    	return $this->hasMany(User::class);
    }

    public function cart(){
    	return $this->hasMany(Cart::class);
    }
}
