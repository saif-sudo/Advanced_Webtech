<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[homecontroller::class,'show'])->name('home');
Route::get('/contact',[homecontroller::class,'contact'])->name('contacts');
Route::get('/login',[homecontroller::class,'login'])->name('login');
Route::get('/admin',[homecontroller::class,'admin'])->name('admin');
Route::get('/student',[homecontroller::class,'student'])->name('student');