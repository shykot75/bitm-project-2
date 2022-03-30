<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiztrozController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CategoryController;

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

// FOR WEBSITE FRONT VIEW
Route::get('/', [ BiztrozController::class, 'index' ])->name('home');
Route::get('/blog-category', [ BiztrozController::class, 'category' ])->name('blog-category');
Route::get('/blog-detail', [ BiztrozController::class, 'detail' ])->name('blog-detail');
Route::get('/contact', [ BiztrozController::class, 'contact' ])->name('contact');


// For ADMIN DASHBOARD MANAGING
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::get('/add-category', [CategoryController::class, 'index'])->name('category.add');
    Route::post('/new-category', [CategoryController::class, 'create'])->name('category.new');
    Route::get('/manage-category', [CategoryController::class, 'manage'])->name('category.manage');
    Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update-category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::post('/delete-category/{id}', [CategoryController::class, 'delete'])->name('category.delete');

});


