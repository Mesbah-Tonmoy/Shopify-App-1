<?php

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
    return view('welcome');
})->middleware(['verify.shopify'])->name('home');

Route::get('/collections', [\App\Http\Controllers\CollectionController::class, 'index'])->middleware(['verify.shopify'])->middleware(['verify.shopify'])->name('collections');

Route::get('/products',[\App\Http\Controllers\CollectionController::class, 'index'])
    ->middleware(['verify.shopify'])->name('product.index');
