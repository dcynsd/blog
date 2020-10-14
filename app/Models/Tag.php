<?php

namespace App\Models;

class Tag extends Model
{
    protected $fillable = [
        'name'
    ];

    public $timestamps = false;

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tag');
    }
}
