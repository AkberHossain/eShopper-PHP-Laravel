<?php

namespace App\Models;

use App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $table = 'order_details';
    protected $guarded = [];

    public function getProductByID($id)
    {
        return Product::findOrFail($id);
    }
}
