<?php

use App\Http\Controllers\PageController;
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

// Page Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('shop', [PageController::class, 'shop'])->name('shop');
Route::get('blogs', [PageController::class, 'blog'])->name('blog');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::get('cart', [PageController::class, 'cart'])->name('cart');
