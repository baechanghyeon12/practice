<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

route::get('/user/{name?}',function($name = null) {
  return view('user',compact('name'));
});

route::get('test1', function(){
  return view('test1',['name'=>'홍길동']);
});