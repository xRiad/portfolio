<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ProjectsController;

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

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', fn () => view('admin.index'))->name('index');
    Route::get('/projects',[ProjectsController::class, 'projects'])->name('projects.index');
    Route::get('/projects/creation',[ProjectsController::class, 'creation'])->name('projects.creation');
    Route::post('/projects/create',[ProjectsController::class, 'create'])->name('projects.create');
    Route::get('/projects/edit',[ProjectsController::class, 'edit'])->name('projects.edit');
});
