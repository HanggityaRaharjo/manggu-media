<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubscribeController;

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
// Comment
Route::post('/comments/{id}', [GuestController::class, 'comment']);
// Subscribe
Route::post('/subscribe', [SubscribeController::class, 'store']);
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
    Route::get('/dashboard/admin/admin-panel', [AdminController::class, 'index']);
    Route::post('/dashboard/admin/articles/{id}', [AdminController::class, 'update']);
    Route::post('/dashboard/admin/articles/reject/{id}', [AdminController::class, 'reject']);
    Route::get('/dashboard/admin/view-panel', [AdminController::class, 'view_panel']);
    // Podcast
    Route::get('/dashboard/admin/podcast', [PodcastController::class, 'index']);
    Route::post('/dashboard/admin/podcast', [PodcastController::class, 'store']);
    // Profile
    Route::get('/dashboard/profile', [ProfileController::class, 'index']);
    Route::get('/dashboard/edit', [ProfileController::class, 'edit']);
    Route::post('/dashboard/update/{id}', [ProfileController::class, 'update']);
    // Note
    Route::post('/dashboard/admin/note/send', [NoteController::class, 'store']);
    // Iklan
    Route::post('/dashboard/admin/iklan/store', [IklanController::class, 'store']);
    // User
    Route::get('/dashboard/admin/users', [UserController::class, 'index']);
    // Subscribe
    Route::get('/dashboard/admin/subscribe', [SubscribeController::class, 'index']);
    Route::post('/dashboard/admin/subscribe/delete/{id}', [SubscribeController::class, 'destroy']);
    // View Panel
    Route::post('/dashboard/admin/component', [ViewController::class, 'store']);
    Route::post('/dashboard/components/delete/{id}', [ViewController::class, 'destroy']);
    Route::post('/dashboard/admin/video/store', [VideoController::class, 'store']);
});
