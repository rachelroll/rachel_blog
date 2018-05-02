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

Route::get('/', 'PostController@index');

Auth::routes();

Route::get('/email/verify/{token}', 'EmailController@verify')->name('email.verify');

Route::resource('users', 'UsersController', ['only'=>['show', 'update', 'edit']]);





Route::resource('posts', 'PostsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);