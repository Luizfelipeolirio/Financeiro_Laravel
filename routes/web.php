<?php

use Illuminate\Support\Facades\Route;
use app\http\Controllers\UserController;
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

Route::get('/index', function () {
    return view('index');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});
// Dando erro 
// action="{{ route('post.cadastro') }}"
//Route::get('/cadastro', [UserController::class, 'create'])->name('get.cadastro'); 
//Route::post('/cadastro', [UserController::class, 'store'])->name('post.cadastro'); 
