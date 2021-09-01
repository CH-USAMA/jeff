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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');

Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');

Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
Route::get('send-test-email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('sendEmail');
