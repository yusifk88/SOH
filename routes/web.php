<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('about', [HomeController::class,'about'])->name('about');
Route::get('search', [HomeController::class,'search'])->name('search');
Route::get('contact', [HomeController::class,'contact'])->name('contact');
Route::get('blog', [HomeController::class,'blog'])->name('blog');
Route::get('blog/{slug}', [HomeController::class,'viewblog'])->name('viewblog');

Route::get('/dashboard', [adminController::class,'index'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/blog/new', [adminController::class,'newblog'])->middleware(['auth'])->name('newblog');
Route::get('/dashboard/blog/delete/{id}', [adminController::class,'destroyblog'])->middleware(['auth'])->name('destroyblog');
Route::post('/dashboard/blog/save', [adminController::class,'storeblog'])->middleware(['auth'])->name('saveblog');

require __DIR__.'/auth.php';
