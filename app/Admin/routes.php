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
    $router->resource('users', 'UserController');
    $router->resource('test', 'TestController');
    $router->resource('workuser', 'WorkUserController');
    $router->resource('workorder', 'WorkOrderController');
    $router->post('workorder/add', 'WorkOrderController@add');
});
