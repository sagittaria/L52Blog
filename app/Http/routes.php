<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');//暂时没用
    Route::get('/articles', 'ArticleController@index');//显示全部
    Route::get('/articles/{aid}', 'ArticleController@detail');//显示一篇
    Route::get('/admin/articles', 'AdminController@index');//管理列表
    Route::get('/admin/articles/create', 'AdminController@create');//写博文-界面
    Route::post('/admin/articles', 'AdminController@store');//保存新文
    Route::get('/admin/articles/{id}/edit', 'AdminController@edit');//编辑博文-界面
    Route::put('/admin/articles/{id}', 'AdminController@update');//保存编辑
    Route::delete('/admin/articles/{id}', 'AdminController@destroy');//删除
});
