<?php

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

Route::get('/', [\App\Http\Controllers\Pages::class,'index'])->name('/');
Route::get('/login',[\App\Http\Controllers\Pages::class,'loginForm'])->name('/login');
Route::get('/register',[\App\Http\Controllers\Pages::class,'registerForm'])->name('/register');
Route::post('/login', [\App\Http\Controllers\Pages::class, 'login'])->name('login');
Route::post('/register', [\App\Http\Controllers\Pages::class, 'register'])->name('register');
Route::get('/dashboard',[\App\Http\Controllers\Pages::class,'dashboard'])->name('dashboard');



