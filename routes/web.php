<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;

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

Auth::routes();

Route::get('/', [BlogController::class, 'index']);



Route::group(['middleware' => 'auth'], function(){
    Route::resource('/category', CategoryController::class);
    Route::resource('/tag', TagController::class);
    Route::get('/posts/tampil_hapus', [PostsController::class, 'tampil_hapus'])->name('posts.tampil_hapus');
    Route::get('/posts/restore/{id}', [PostsController::class, 'restore'])->name('posts.restore');
    Route::delete('/posts/kill/{id}', [PostsController::class, 'kill'])->name('posts.kill');
    Route::resource('/posts', PostsController::class);    
    Route::resource('/users', UserController::class);    
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});