<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
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

Route::get('/',[ArticleController::class, 'index'])->middleware('auth');

Route::resource('articles', ArticleController::class)->middleware('auth');
Route::post('articles/search/', [ArticleController::class, 'searchByTitle'])->name('articles.search')->middleware('auth');
Route::get('users/{id}/', [UserController::class, 'profile'])->name('users.profile')->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
