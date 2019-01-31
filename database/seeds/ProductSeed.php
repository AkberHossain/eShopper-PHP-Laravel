<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Product_Category;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products = [
            'product1' , 'product2' , 'product3' ,'product4' , 'product5' ,
            'product10' ,'product9' ,'product8' ,'product7' ,'product6' 
        ];

        foreach($products as $product )
        {
            $created_product = Product::create([

                'name'=>$product,
                'sell_price'=>111,
                'buy_price'=>111,
                'short_description'=>'qqq',
                'cover_image'=>'product_image/jeFJ5JZrlM2YZIu08ssR8KNxetVKKwMNBz8mGwAD.jpeg',
                'stock'=>111,
                'user_id'=>1,
                'long_description'=>'qqqqq'

            ]);

            Product_Category::create([

                'category_id' => 1 ,
                'product_id' => $created_product->id

            ]);
        }
        
    }
}
