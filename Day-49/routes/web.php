<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiztrozController;

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












































//
//Route::get('/', function () {
//    return view('master.front.master');
//});
