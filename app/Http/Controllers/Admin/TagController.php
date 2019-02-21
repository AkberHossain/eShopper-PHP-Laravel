<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Tag;

class TagController extends Controller
{
    public function tagFind()
    {

        $tags = Tag::all()->toArray();

        $_tags = array();

        foreach($tags as $tag)
        {
            array_push($_tags , $tag['name']);
        }

        return response()->json(array_values($_tags));

    }

    public function showAllTags()
    {
        $tags = Tag::all();

        return view('admin-panel.tags.all_tags' , compact('tags'));
    }

    public function create()
    {
        return view('admin-panel.tags.tag_create_form');
    }

    public function details($id)
    {
        $tag = Tag::findOrFail($id);

        return view('admin-panel.tags.tag_details' , compact('tag') );
    }

    public function update(Request $request , $id)
    {
        $tag = Tag::findOrFail($id);

        $tag->update([
            'name' => $request->name , 
        ]);

        return redirect()->route('admin.tag');

    }

    public function delete($id)
    {
        $tag = Tag::findOrFail($id);

        $tag->delete();

        return redirect()->route('admin.tag');
    }


    public function store(Request $request)
    {

        ///Validation


        //create category

        $tag = Tag::create([

            'name' => $request->name , 

        ]);

        return redirect()->route('admin.tag');
    }
}
