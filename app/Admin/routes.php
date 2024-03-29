<?php

use Dcat\Admin\Admin;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('links', 'LinkController');
    $router->resource('tags', 'TagController');
    $router->resource('navigations', 'NavigationController');
    $router->resource('categories', 'CategoryController');
    $router->resource('posts', 'PostController');
});
