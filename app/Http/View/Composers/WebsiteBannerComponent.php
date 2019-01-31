<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

use DB;

class WebsiteBannerComponent
{

    
    public function __construct()
    {
        
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $men_categories  =  DB::table('categories')->select('*')

            ->whereIn('id' , function($query){

                $query->select('category_id')->from('parent_categories')

                    ->whereIn('parent_category_id' , function($query){

                        $query->select('id')->from('categories')->where('name' , '=' , 'Men');
                    });

        })->get();

        $women_categories  =  DB::table('categories')->select('*')

            ->whereIn('id' , function($query){

                $query->select('category_id')->from('parent_categories')

                    ->whereIn('parent_category_id' , function($query){

                        $query->select('id')->from('categories')->where('name' , '=' , 'Women');
                    });

        })->get();

        $view->with('men_categories', $men_categories);
        $view->with('women_categories', $women_categories);


    }
}