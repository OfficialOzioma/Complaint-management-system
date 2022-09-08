<?php

use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserAuthController;
use App\Http\Controllers\Admin\CategoryController;
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
Route::get('/complaint/resolved', [ComplaintController::class, 'getresolved'])->name('complaint.resolved');
Route::get('/complaint/unresolved', [ComplaintController::class, 'getunresolved'])->name('complaint.unresolved');
Route::get('/complaint/show/{id}', [ComplaintController::class, 'show'])->name('complaint.show');

Route::get('/predefined-complaint', [ComplaintController::class, 'predefined'])->name('predefined-complaint');

Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');

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

    Route::delete('/comment/destroy', [CommentController::class, 'destroy'])->name('comment.destroy');

    Route::get('/setting', [SettingController::class, 'settings'])->name('user.setting');
    Route::post('/setting', [SettingController::class, 'store'])->name('save.setting');


    Route::get('/logout', [UserAuthController::class, 'logout'])->name('logout');
});





/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/

Route::get('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('/admin/authenticate', [AdminAuthController::class, 'adminAuthenticate'])->name('admin.authenticate');
Route::get('admin/issues/{id}', [AdminDashboardController::class, 'issuesShow'])->name('admin.issues.show');


Route::middleware('auth:admin')->group(function () {
    // Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [AdminDashboardController::class, 'index'])->name('admin.home');

    Route::get('/admins', [AdminDashboardController::class, 'adminList'])->name('admin.adminList');
    Route::post('admin/create', [AdminDashboardController::class, 'adminCreate'])->name('admin.adminCreate');
    Route::delete('admin/delete', [AdminDashboardController::class, 'adminDelete'])->name('admin.adminDelete');

    Route::get('admin/issues', [AdminDashboardController::class, 'issuesList'])->name('admin.issuesList');
    Route::post('admin/issues/create', [AdminDashboardController::class, 'issuesCreate'])->name('admin.issuesCreate');
    Route::put('admin/issues/create', [AdminDashboardController::class, 'issuesCreate'])->name('admin.issuesCreate');
    Route::delete('admin/issues/create/{id}', [AdminDashboardController::class, 'deleteIssue'])->name('admin.deleteIssue');



    Route::resource('admin/category', CategoryController::class);

    Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});
