<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\FoodController;
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

Route::controller(AppController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('admin', 'admin')->name('admin.home');
    Route::get('menu', 'menu')->name('menu');
    ROute::get('about', 'about')->name('about');
    Route::get('login', 'login')->name('login');
    Route::get('register', 'register')->name('register');
});

Route::prefix('food')->controller(FoodController::class)->group(function () {
    Route::get('create', 'create')->name('food.create');
    Route::get('edit', 'edit')->name('food.edit');
    Route::get('detail', 'detail')->name('food.detail');
});
