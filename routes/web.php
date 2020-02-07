<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//项目开启
//模板
Route::prefix('index/layout')->group(function(){//
    Route::any('layout','index\LayoutController@layout');//模板页
});
//主页
Route::prefix('index/index')->group(function(){
    Route::any('index','index\IndexController@index');//主页展示
});
//注册
Route::prefix('index/register')->group(function(){
    Route::any('index','index\RegisterController@index');//注册页面
});
//登录
Route::prefix('index/login')->group(function(){
    Route::any('index','index\LoginController@index');//登录
});