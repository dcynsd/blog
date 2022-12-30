<?php

namespace App\Models;

class Link extends Model
{
    protected $fillable = [
        'name', 'title', 'avatar', 'url', 'order'
    ];
}
