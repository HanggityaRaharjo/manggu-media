<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

Route::get('/tes', function () {
    return view('auth.user.index');
});


// ------------------------------------- Guest -------------------------------------
Route::get('/', [GuestController::class, 'index']);
Route::get('/show/{id}', [GuestController::class, 'show']);
Route::get('/by-category', [GuestController::class, 'by_category']);
Route::get('/by-category/{id}', [GuestController::class, 'show_by_category']);
// -------------------------------------  -------------------------------------
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LogoutController::class, 'logout']);


// ------------------------------------- Auth -------------------------------------
Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Article
    Route::get('/create-article', [ArticleController::class, 'create']);
    Route::post('/create-article', [ArticleController::class, 'store']);
    // Kategori
    Route::get('/kategori', [KategoriController::class, 'index']);
    Route::post('/kategori', [KategoriController::class, 'store']);
    // Admin
    Route::get('/dashboard/admin/articles', [AdminController::class, 'index']);
    Route::post('/dashboard/admin/articles', [AdminController::class, 'store']);
    // Podcast
    Route::get('/dashboard/admin/podcast', [PodcastController::class, 'index']);
    Route::post('/dashboard/admin/podcast', [PodcastController::class, 'store']);
});
