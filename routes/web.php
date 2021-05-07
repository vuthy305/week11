<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category',['App\Http\Controllers\HomeController','category'])->name('category');
Route::get('/category/create',['App\Http\Controllers\CategoryController','create'])->name('createcategory');
Route::get('/category/edit/{id}',['App\Http\Controllers\CategoryController','edit']);
Route::get('/category/delete/{id}',['App\Http\Controllers\CategoryController','delete']);

Route::get('/post',['App\Http\Controllers\HomeController','post'])->name('post');
Route::get('/post/create',['App\Http\Controllers\HomeController','create'])->name('createpost');
Route::get('/post/edit/{id}',['App\Http\Controllers\PostController','edit']);
Route::get('/post/delete/{id}',['App\Http\Controllers\PostController','delete']);

Route::post('/posts',['App\Http\Controllers\PostController','store']);
Route::post('category',['App\Http\Controllers\CategoryController','store']);

Route::put('/posts/{id}',['App\Http\Controllers\PostController','update']);
Route::put('/category/{id}',['App\Http\Controllers\CategoryController','update']);

Route::delete('/posts/{id}',['App\Http\Controllers\PostController','destroy']);
Route::delete('/category/{id}',['App\Http\Controllers\CategoryController','destroy']);