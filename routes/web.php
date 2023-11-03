<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\Guest\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('comics', [PageController::class , 'comics'])->name('guests.comics');

Route::resource('guest/comics', PageController::class);