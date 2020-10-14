<?php

namespace App\Models;

class Post extends Model
{
    protected $fillable = [
        'title', 'sub_title', 'content', 'excerpt', 'slug', 'author', 'original_url',
        'view_count', 'order', 'is_issued',
    ];

    protected $casts = [
        'is_issued' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }
}
