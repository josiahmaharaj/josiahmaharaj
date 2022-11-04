<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/blog', [PostController::class, 'index'])->name('post.index');

Route::get('/post', function () {
    return view('post');
});

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/upload', [HomeController::class, 'upload'])->middleware(['auth', 'verified'])->name('upload');

Route::get('/update-password', [PasswordController::class, 'edit'])->middleware(['auth', 'verified'])->name('auth.edit-password');
Route::patch('/update-password', [PasswordController::class, 'update'])->middleware(['auth', 'verified'])->name('auth.update-password');

Route::group(['prefix' => 'posts'], function () {
    // Route::get('/', [PostController::class, 'index'])->name('post.index');
    Route::get('/create', [PostController::class, 'create'])->middleware(['auth', 'verified'])->name('post.create');
    Route::post('/create', [PostController::class, 'store'])->middleware(['auth', 'verified'])->name('post.store');
    Route::get('/{post}/show', [PostController::class, 'show'])->name('post.show');
    Route::get('/{post}/edit', [PostController::class, 'edit'])->middleware(['auth', 'verified'])->name('post.edit');
    Route::patch('/{post}/update', [PostController::class, 'update'])->middleware(['auth', 'verified'])->name('post.update');
    Route::delete('/{post}/delete', [PostController::class, 'destroy'])->middleware(['auth', 'verified'])->name('post.destroy');
});


require __DIR__ . '/auth.php';
