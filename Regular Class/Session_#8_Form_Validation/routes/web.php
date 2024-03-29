<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
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

// root
// Route::get('/', function () {
//     return view('partial.base');
// });

Route::get('/', [AppController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');
ROute::post('/login', [AuthController::class, 'auth_login']);
