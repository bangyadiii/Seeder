<?php

use App\Http\Controllers\TimelineController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserManageController;
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
Route::middleware('auth')->group(function () {
    Route::get("profile/{username}", [UserManageController::class, 'show'])->name('profile');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    // Route::get("/profile/following", [UserManageController::class, 'show'])->name('user_following');
    // Route::get("/profile/followers", [UserManageController::class, 'show'])->name('user_followers');
    Route::get('/', [TimelineController::class, 'index'])->name('timeline');
    Route::resource('post', PostController::class);
    Route::get("edit/{user}", [UserManageController::class, 'edit'])->name('edit.profile');
    Route::put("edit/{user}", [UserManageController::class, 'update'])->name('edit.profile');
});


Route::middleware('guest')->group(function () {

    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/registrasi', [UserManageController::class, 'create'] )->name('register');
    Route::post('/registrasi', [UserManageController::class, 'store']);

});


