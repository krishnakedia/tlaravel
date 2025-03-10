<?php

use App\Http\Controllers\FrontendController;
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

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/product', [FrontendController::class, 'product'])->name('product');
Route::get('/details', [FrontendController::class, 'details'])->name('details');
Route::get('/login', [FrontendController::class, 'login'])->name('login');
Route::get('/register', [FrontendController::class, 'register'])->name('register');
