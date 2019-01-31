<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Parent_Category;

use Session;
use App\Http\Controllers\Controller;

Session_start();

class CategoryController extends Controller
{

    public function showCategories()
    {
        $categories = Category::all();

        return view('admin-panel.categories.all_categories' , compact('categories'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin-panel.categories.category_create_form' , compact('categories'));
    }


    public function store(Request $request)
    {

        ///Validation


        //create category

        $category = Category::create([

            'name' => $request->name , 
            'user_id' => Session::get('user_id') , 

        ]);

        ///create parent-categories table 

        if($request->exists('parent_categories'))
        {
            foreach($request->parent_categories as $parent_category)
            {
                Parent_Category::create([
                    'category_id' => $category->id ,
                    'parent_category_id' => $parent_category
                ]);
            }
        }


        return redirect()->route('admin.category');
    }
}
