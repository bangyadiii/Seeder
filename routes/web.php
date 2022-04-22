<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Tesview;
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

    Route::get("/profile/{username}", [UserManageController::class, 'show'])->name('profile');
    Route::get("edit/{user}", [UserManageController::class, 'edit'])->name('edit.profile');
    Route::put("edit/{user}", [UserManageController::class, 'update'])->name('edit.profile');
    Route::delete("edit/{user}/delete", [UserManageController::class, 'destroy'])->name('edit.delete');
    Route::resource('post', PostController::class);
    Route::post('follows/{user}', [FollowsController::class, 'store'])->name('follow.store');
    Route::get("/profile/{user}/following", [FollowsController::class, 'following'])->name('user.following');
    Route::get("/profile/{user}/followers", [FollowsController::class, 'followers'])->name('user.followers');
    Route::resource('posts/{post}/comments', CommentsController::class);
    Route::get("/search-result", [SearchController::class, 'search'])->name('search');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/', [TimelineController::class, 'index'])->name('timeline');
});


Route::middleware('guest')->group(function () {

    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/registrasi', [UserManageController::class, 'create'] )->name('register');
    Route::post('/registrasi', [UserManageController::class, 'store'])->name('register');

});

Route::get("test/view1", [Tesview::class, 'tesview1']);

