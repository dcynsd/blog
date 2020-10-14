<?php

namespace App\Observers;

use App\Models\Post;

class PostObserver
{
    public function saving(Post $post)
    {
        $post->excerpt = make_excerpt($post->content);
    }

    /**
     * Handle the post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        $post->category()->increment('post_count');
    }

    /**
     * Handle the post "deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function deleted(Post $post)
    {
        $post->category()->decrement('post_count');
    }
}
