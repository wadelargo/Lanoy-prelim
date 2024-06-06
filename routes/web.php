<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\MerchandiseController;
use App\Models\Merchandise;
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


Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/units', [UnitController::class, 'index'])->name('units');
Route::get('/merchandises', [MerchandiseController::class, 'index'])->name('merchandises');
