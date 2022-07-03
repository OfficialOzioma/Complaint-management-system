<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminDashboardController;

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
    return view('home');
});
Route::get('/login', function () {
    return view('user.login');
});
Route::get('/register', function () {
    return view('user.register');
});
Route::get('/admin/login', function () {
    return view('admin.login');
});
Route::get('/dashboard', function () {
    return view('user.dashboard');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware('auth:user')->group(function () {
    // Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [UserController::class, 'index'])->name('dashboard');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware('auth:admin')->group(function () {
    // Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [AdminDashboardController::class, 'adminHome'])->name('admin.home');
});