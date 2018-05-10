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

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

Route::get('/', 'PostsController@index');

Auth::routes();

Route::get('/email/verify/{token}', 'EmailController@verify')->name('email.verify');

Route::resource('users', 'UsersController', ['only'=>['show', 'update', 'edit']]);





Route::resource('posts', 'PostsController', ['only' => ['index', 'create', 'store', 'update', 'edit', 'destroy']]);

Route::get('posts/{post}/{slug?}', 'PostsController@show')->name('posts.show');

Route::resource('categories', 'CategoriesController', ['only' => ['show']]);