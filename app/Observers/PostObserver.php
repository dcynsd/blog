<?php

namespace App\Observers;

use App\Jobs\TranslateSlug;
use App\Models\Post;

class PostObserver
{
    public function saving(Post $post)
    {
        $post->excerpt = make_excerpt($post->content);

        $post->word_count = post_word_count($post->content);
    }

    public function saved(Post $post)
    {
        // 如 slug 字段无内容，即使用翻译器对 title 进行翻译
        if (! $post->slug) {
            // 推送任务到队列
            dispatch(new TranslateSlug($post));
        }
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
