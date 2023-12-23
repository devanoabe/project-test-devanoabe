<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('app');
});

Route::get('/page1', [HomeController::class, 'index'])->name('page1');  
Route::get('/page2', [HomeController::class, 'index'])->name('page2');  
Route::get('/page3', [HomeController::class, 'index'])->name('page3');  
Route::get('/page4', [HomeController::class, 'index'])->name('page4');  
Route::get('/page5', [HomeController::class, 'index'])->name('page5');  
Route::get('/page6', [HomeController::class, 'index'])->name('page6');  
