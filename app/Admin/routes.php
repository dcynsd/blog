<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->resource('posts', 'PostController');
    $router->resource('categories', 'CategoryController');
    $router->resource('tags', 'TagController');
    $router->resource('links', 'LinkController');
    $router->resource('navigations', 'NavigationController');
    $router->get('about', 'AboutController@index');

});
