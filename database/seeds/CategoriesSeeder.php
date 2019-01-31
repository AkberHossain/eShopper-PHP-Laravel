<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Men' , 'Women' 
        ];

        foreach($categories as $category)
        {
            Category::create([
                'name' => $category , 
                'user_id' => 1
            ]);
        }
    }
}
