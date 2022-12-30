<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use App\Handlers\MarkdownHandler;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    use Searchable;

    public $asYouType = true;

    protected $fillable = [
        'title', 'sub_title', 'image', 'content', 'excerpt', 'slug', 'author', 'original_url',
        'view_count', 'word_count', 'order', 'is_issued',
    ];

    protected $casts = [
        'is_issued' => 'boolean',
    ];

    protected static function booted()
    {
        static::addGlobalScope('is_issued', function (Builder $builder) {
            $builder->where('is_issued', true);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }

    public function link($params = [])
    {
        return route('posts.show', array_merge([$this->id, $this->slug], $params));
    }

    public function getNextPage()
    {
        return Post::where('id', '>', $this->id)->oldest('id')->first();
    }

    public function getLastPage()
    {
        return Post::where('id', '<', $this->id)->latest('id')->first();
    }

    public function getAuthorAttribute()
    {
        return $this->author ?? 'dcynsd';
    }

    public function getReadSpeedAttribute()
    {
        return ceil($this->word_count / 300);
    }

    public function getHtmlPostAttribute()
    {
        return app(MarkdownHandler::class)->convertMarkdownToHtml($this->content);
    }

    public function visits()
    {
        return visits($this);
    }

    public function getFullImageAttribute()
    {
        return makeFullUrl($this->image);
    }

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => strip_tags($this->content),
        ];
    }
}
