<?php

namespace App\Models;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public $timestamps = false;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function getLimitPosts($limit = 10)
    {
        return $this->posts()->limit($limit)->latest()->get();
    }

    public function link($params = [])
    {
        return route('categories.show', array_merge([$this->id], $params));
    }
}
