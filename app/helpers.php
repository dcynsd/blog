<?php

if (! function_exists('get_page_param')) {
    function get_page_param($name)
    {
        $config = config('vh');
        $key = \Illuminate\Support\Facades\Route::currentRouteName();
        return $config[$key][$name];
    }
}

if (! function_exists('getVhHeight')) {
    function getVhHeight()
    {
        $config = config('vh');
        $key = \Illuminate\Support\Facades\Route::currentRouteName();
        return $config[$key]['vh'];
    }
}

if (! function_exists('is_scroll_down_bar')) {
    function is_scroll_down_bar()
    {
        $config = config('vh');
        $key = \Illuminate\Support\Facades\Route::currentRouteName();
        return $config[$key]['is_scroll_down_bar'];
    }
}
