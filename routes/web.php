<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/portfolio',[PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/blog',[BlogController::class, 'index'])->name('blog.index');
Route::post('/contact',[ContactController::class, 'createMessage'])->name('contact');
Route::get('/project/{id}',[PortfolioController::class, 'getProject'])->name('project');
Route::get('/blog/{id}',[BlogController::class, 'getBlog'])->name('blog');
Route::get('/admin',[BlogController::class, 'getBlog'])->name('admin.index');

