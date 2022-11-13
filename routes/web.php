<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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
    return view('index');
});

Route::get('/actors', function () {
    return view('actors');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/postLogin', [UserController::class, 'postLogin'])->name('postLogin');

Route::get('/register', function () {
    return view('register');
});

Route::post('register', [UserController::class, 'register_action'])->name('register.action');

Route::post('/profile', [UserController::class, 'update_profile'])->name('update.profile');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/profile', function () {
    return view('profile');
});
