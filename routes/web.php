<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [IndexController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/home', [HomepageController::class, 'index'])->middleware('auth');

Route::get('/ebook/{ebook_id}', [EbookController::class, 'show'])->middleware('auth');
Route::post('/add-to-cart/{ebook_id}', [EbookController::class, 'add_to_cart'])->middleware('auth');

Route::get('/cart', [CartController::class, 'show'])->middleware('auth');
Route::post('/delete-book', [CartController::class, 'delete']);
Route::post('/rent-all', [CartController::class, 'deleteAll']);