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
}
