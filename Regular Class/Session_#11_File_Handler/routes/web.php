<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\InvoiceController;
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
    Route::middleware('guest')->group(function () {
        Route::get('login', 'login')->name('login');
        Route::get('register', 'register')->name('register');
        route::post('login', 'userLogin')->name('user.login');
        route::post('register', 'userRegister')->name('user.register');
    });

    Route::middleware('auth')->group(function () {
        Route::post('logout', 'logout')->name('logout');
        Route::middleware('admin')->group(function () {
            Route::get('admin', 'filter')->name('admin.home');
            Route::get("admin/filter/{category}", 'filter')->name('admin.filter');
        });
    });

    Route::get('/', 'index')->name('home');
    Route::get('search', 'search')->name('home.search');
    Route::get('menu', 'menu')->name('menu');
    ROute::get('about', 'about')->name('about');
});

Route::prefix('food')->controller(FoodController::class)->group(function () {
    Route::get('create', 'create')->name('food.create');
    Route::post('store', 'store')->name('food.store');
    Route::get('edit/{food}', 'edit')->name('food.edit');
    Route::post('update/{food}', 'update')->name('food.update');
    Route::delete('delete/{food}', 'delete')->name('food.delete');
    Route::get('detail/{food}', 'detail')->name('food.detail');
});

Route::controller(InvoiceController::class)->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('invoice', 'index')->name('invoice');
        Route::get('invoice/{invoice}', 'detail')->name('invoice.detail');
        Route::post('invoice', 'store')->name('invoice.store');
        Route::delete('invoice/{invoice}', 'delete')->name('invoice.delete');
    });
});

Route::controller(CheckoutController::class)->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('checkout', 'index')->name('checkout');
        Route::post('checkout', 'store')->name('checkout.store');
    });
});
