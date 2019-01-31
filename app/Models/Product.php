<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];


    public function allCategories()
    {
        return $this->belongsToMany('App\Models\Category' , 'product_categories');
    }
}
