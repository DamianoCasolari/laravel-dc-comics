<?php

use App\Http\Controllers\Admin\ComicController;
use App\Http\Controllers\Guest\PageController;
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

// GUEST  CONTROLLER

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/comic/{id}', [PageController::class, "show"])->name("showComic");



// ADMIN  CONTROLLER

// Route::resource('comics', ComicController::class);
Route::resource('/admin/comics', ComicController::class, ['as' => 'admin']);
