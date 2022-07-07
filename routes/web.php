<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserAuthController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Complaint\CommentController;
use App\Http\Controllers\Complaint\ComplaintController;
use App\Http\Controllers\Admin\AdminDashboardController;

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

Route::get('/home', [Homecontroller::class, 'index'])->name('home');
Route::get('/login', [UserAuthController::class, 'login'])->name('login');
Route::post('/authenticate', [UserAuthController::class, 'userAuthenticate'])->name('user.authenticate');

Route::get('/register', [UserAuthController::class, 'register'])->name('register');
Route::post('/signup', [UserAuthController::class, 'signup'])->name('signup');

Route::get('/complaint', [ComplaintController::class, 'index'])->name('complaint.index');
Route::get('/complaint/show/{id}', [ComplaintController::class, 'show'])->name('complaint.show');

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/

Route::middleware('auth:user')->group(function () {
    // Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');

    Route::get('/complaint/create', [ComplaintController::class, 'create'])->name('complaint.create');
    Route::post('/complaint/store', [ComplaintController::class, 'store'])->name('complaint.store');
    Route::get('/complaint/{id}/edit', [ComplaintController::class, 'edit'])->name('complaint.edit');
    Route::put('/complaint/update/{id}', [ComplaintController::class, 'update'])->name('complaint.update');
    Route::delete('/complaint/destroy', [ComplaintController::class, 'destroy'])->name('complaint.destroy');
    Route::post('/complaint/resolve', [ComplaintController::class, 'resolve'])->name('complaint.resolve');

    Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');
    Route::delete('/comment/destroy', [CommentController::class, 'destroy'])->name('comment.destroy');

    Route::get('/logout', [UserAuthController::class, 'logout'])->name('logout');
});





/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/

Route::get('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('/admin/authenticate', [AdminAuthController::class, 'adminAuthenticate'])->name('admin.authenticate');

Route::middleware('auth:admin')->group(function () {
    // Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [AdminDashboardController::class, 'adminHome'])->name('admin.home');
});