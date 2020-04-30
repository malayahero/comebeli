<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded = [];

    public function users(){
    	return $this->hasMany(User::class);
    }
    
    public function orders(){
    	return $this->hasMany(Order::class);
    }

    public function getImageAttribute()
	{
	   return $this->profile_image;
	}

   
}
