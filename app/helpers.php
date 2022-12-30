<?php

if (!function_exists('current_navigation')) {
    /**
     * 获取当前导航
     * @param $navigations
     * @param $post
     * @param null $currentModel
     * @return array|bool|mixed
     */
    function current_navigation($navigations, $post = null, $currentModel = null)
    {
        if (\Illuminate\Support\Facades\Route::currentRouteName() === 'posts.show') {
            return [
                'height' => '60vh',
                'image' => $post ? $post->full_image : '',
                'is_scroll_down_bar' => false,
                'is_post_meta' => true,
                'sub_title' => $post ? $post->title : '',
            ];
        }
        $route = \Illuminate\Support\Facades\Route::getCurrentRoute();
        $arr = explode('/', $route->uri);
        $uri = $route->uri !== '/' ? "/{$arr[0]}" : '/';
        $res = $navigations->search(function ($item) use ($uri) {
            return $item['url'] === $uri;
        });
        $nav = $navigations[$res];
        // if ($uri === '/') {
        //     $arr = [
        //         'Coding is an art.',
        //         '时间不在于你拥有多少，而在于你如何使用。',
        //         '我于杀戮之中绽放，亦如黎明中的花朵。',
        //
        //     ];
        //     $nav['sub_title'] = $arr[array_rand($arr)];
        // }
        $nav['sub_title'] = $currentModel ? $nav['sub_title'] . ' - ' . $currentModel->name : $nav['sub_title'];
        return $nav;
    }
}

if (!function_exists('make_excerpt')) {
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

if (!function_exists('post_word_count')) {
    /**
     * 统计文章字数
     * @param $str
     * @return bool|false|int
     */
    function post_word_count($str)
    {
        // 判断是否存在替换字符
        $isReplaceCount = substr_count($str, "龘");
        try {
            // 先将回车换行符做特殊处理
            $str = preg_replace('/(\r\n+|\s+|　+)/', "龘", $str);
            // 处理英文字符数字，连续字母、数字、英文符号视为一个单词
            $str = preg_replace('/[a-z_A-Z0-9-\.!@#\$%\\\^&\*\)\(\+=\{\}\[\]\/",\'<>~`\?:;|]/', "m", $str);
            // 合并字符m，连续字母、数字、英文符号视为一个单词
            $str = preg_replace('/m+/', "*", $str);
            // 去掉回车换行符
            $str = preg_replace('/龘+/', "", $str);
            // 返回字数
            return mb_strlen($str) + $isReplaceCount;
        } catch (Exception $e) {
            return 0;
        }
    }
}

if (!function_exists('makeFullUrl')) {
    /**
     * 获得完整 URL 地址
     * @param string|array $url
     * @return string | array
     */
    function makeFullUrl($url)
    {
        if (!$url) {
            return '';
        }

        if (is_array($url)) {
            $result = [];

            foreach ($url as $item) {
                $result[] = makeFullUrl($item);
            }

            return $result;
        }

        if (\Illuminate\Support\Str::startsWith($url, 'http')) {
            return $url;
        }

        if (!\Illuminate\Support\Str::startsWith($url, '/')) {
            $url = "/{$url}";
        }

        return config('app.url') . "/storage{$url}";
    }
}
