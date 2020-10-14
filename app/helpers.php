<?php

if (! function_exists('current_navigation')) {
    /**
     * 获取当前导航
     * @param $navigations
     * @param $post
     * @return array|bool|mixed
     */
    function current_navigation($navigations, $post = null)
    {
        if (\Illuminate\Support\Facades\Route::currentRouteName() === 'posts.show') {
            return [
                'height' => '60vh',
                'image' => $post ? $post->image : 'https://rmt.dogedoge.com/fetch/fluid/storage/bg/dojm2h.png?w=1920&q=100&fmt=webp',
                'is_scroll_down_bar' => false,
                'is_post_meta' => true,
                'sub_title' => $post ? $post->title : '文章'
            ];
        }
        $route = \Illuminate\Support\Facades\Route::getCurrentRoute();
        $uri = $route->uri !== '/' ? "/{$route->uri}" : '/';
        $res = $navigations->search(function ($item) use ($uri) {
            return $item['url'] === $uri;
        });
        if ($res === false) {
            return [
                'height' => '60vh',
                'image' => 'https://rmt.dogedoge.com/fetch/fluid/storage/bg/dojm2h.png?w=1920&q=100&fmt=webp',
                'is_scroll_down_bar' => false,
                'is_post_meta' => true,
                'sub_title' => '文章'
            ];
        }
        return $navigations[$res];
    }
}

if (! function_exists('make_excerpt')) {
    /**
     * 制作文章摘要
     * @param $value
     * @param int $length
     * @return string
     */
    function make_excerpt($value, $length = 200)
    {
        $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
        return \Illuminate\Support\Str::limit($excerpt, $length);
    }
}
