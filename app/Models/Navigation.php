<?php

namespace App\Models;

class Navigation extends Model
{
    protected $fillable = [
        'parent_id', 'name', 'sub_title', 'url', 'image', 'height', 
        'is_scroll_down_bar', 'icon', 'order',
    ];

    protected $casts = [
        'is_scroll_down_bar' => 'boolean',
    ];

    public $timestamps = false;

    public function parent()
    {
        return $this->belongsTo(Navigation::class);
    }

    public function children()
    {
        return $this->hasMany(Navigation::class, 'parent_id');
    }
}
