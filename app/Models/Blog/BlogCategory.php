<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $fillable = ['blog_id','category_id'];
}
