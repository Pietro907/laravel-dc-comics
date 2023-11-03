<?php

use Illuminate\Support\Facades\Route;
//Importo il PageController  
use App\HTTP\Controllers\Guest\PageController;
//Importoi l'AdminController
use App\HTTP\Controllers\Guest\AdminController;
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

//Route page home (welcome.blade.php) page utente
Route::get('/', [PageController::class, 'index'])->name('home');

//Route page admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

//Ruote resource admin/comics in AdminController
Route::resource('admin/comics', AdminController::class);