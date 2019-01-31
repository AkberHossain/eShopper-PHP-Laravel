<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function parent_category()
    {
        return $this->belongsTo(Category::class,'parent_category_id','id');
    }
}
