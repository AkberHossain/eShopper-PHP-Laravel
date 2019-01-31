<?php

namespace App\Models;

class Cart
{
    public $products = null;
    public $total_qty = 0;
    public $total_price = 0;
 
    public function __construct($oldcart)
    {
        if($oldcart)
        {
            $this->products = $oldcart->products;
            $this->total_qty = $oldcart->total_qty;
            $this->total_price = $oldcart->total_price;
        }
    }

    public function add($product , $id)
    {
        $product_tobe_added = [ 'qty'=> 0 , 'price'=>$product->sell_price , 'product'=>$product ];

        if($this->products)
        {
            if(array_key_exists($id , $this->products))
            {
                $product_tobe_added = $this->products[$id];
            }
        }

        $product_tobe_added['qty']++;
        $product_tobe_added['price'] = $product_tobe_added['qty'] * $product->sell_price ; 
        $this->products[$id] = $product_tobe_added ;
        $this->total_qty++;
        $this->total_price += $product->sell_price;
    }
}
