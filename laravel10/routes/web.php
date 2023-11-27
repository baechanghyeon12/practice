<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StringController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/',[ProductController::class, 'index'])->name('product.index');

route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

route::get('/user/{name?}',function($name = null) {
  return view('user',compact('name'));
});

route::get('test1', function(){
  return view('test1',['name'=>'홍길동']);
});

Route::get('/posts', [ClientController::class, 'getAllPost'])->name('posts.getallpost');
Route::get('/posts/{id}', [ClientController::class, 'getPostById'])->name('posts.getpostbyid');
Route::get('/add-post', [ClientController::class, 'addPost'])->name('posts.addpost');
Route::get('/update-post', [ClientController::class, 'updatePost'])->name('posts.update');
Route::get('/delete-post/{id}', [ClientController::class, 'deletePost'])->name('posts.delete');

Route::get('/string', [StringController::class,'index'])->name('string.index');