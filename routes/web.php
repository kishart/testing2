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

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function(){
        return view('home');
    });
});


Route::middleware(['auth'])->group(function () {
    Route::get('/services', function(){
        return view('services');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::get('/notification', function(){
        return view('notification');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function(){
        return view('profile');
    });
});
Route::middleware(['auth'])->group(function () {
    Route::get('/contact', function(){
        return view('contact');
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

