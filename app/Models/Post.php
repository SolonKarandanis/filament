<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'thumbnail',
        'title',
        'slug',
        'color',
        'category_id',
        'user_id',
        'content',
        'tags',
        'published',
    ];
}
