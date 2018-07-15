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


Route::get('/', 'PostsController@index')->name('index');


//注册登陆相关
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login');
Route::post('logout','Auth\LoginController@logout')->name('logout');

Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/reset','Auth\ForgotPasswordController@reset');
Route::get('password/reset/{token}','Auth\ForgotPasswordController@showResetForm')->name('password.reset');

Route::get('register','Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
//注册登陆相关.end


Route::get('/email/verify/{token}', 'EmailController@verify')->name('email.verify');

Route::resource('users', 'UsersController', ['only'=>['show', 'update', 'edit']]);

Route::resource('replies', 'RepliesController', [
    'only' => [
        'store',
        'destroy',
    ],
]);

Route::resource('posts', 'PostsController', ['only' => ['index', 'create', 'store', 'update', 'edit', 'destroy']]);

Route::get('posts/{post}/{slug?}', 'PostsController@show')->name('posts.show');

Route::resource('categories', 'CategoriesController', ['only' => ['show']]);

Route::resource('notifications', 'NotificationsController', [
    'only' => [
        'index',
    ],
]);

//标签页面
Route::get('tags','TagsController@index')->name('tags.index');

//时间轴 归档
Route::get('timeline','TimelineController@index')->name('timeline.index');
//关于
Route::get('about','AboutController@index')->name('about.index');

























