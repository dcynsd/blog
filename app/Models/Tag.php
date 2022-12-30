<?php

namespace App\Models;

class Tag extends Model
{
    protected $fillable = [
        'name', 'post_count'
    ];

    public $timestamps = false;

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tag');
    }

    public function link($params = [])
    {
        return route('tags.show', array_merge([$this->id], $params));
    }
}
