<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ColorController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('/dashboard', [FrontendController::class, 'index'])->name('dashboard');

    Route::get('categories', [CategoryController::class, 'index'])->name('categories');
    // Route::get('add-category', [CategoryController::class, 'add'])->name('add-category');
    Route::post('insert-category', [CategoryController::class, 'insert'])->name('insert-category');
    Route::get('edit-category/{id}', [CategoryController::class, 'edit'])->name('edit-category');
    Route::put('update-category/{id}', [CategoryController::class, 'update'])->name('update-category');
    Route::get('delete-category/{id}', [CategoryController::class, 'destroy'])->name('delete-category');

    Route::get('products', [ProductController::class, 'index'])->name('products');
    Route::get('add-products', [ProductController::class, 'add'])->name('add-products');
    Route::post('insert-product', [ProductController::class, 'insert'])->name('insert-product');
    Route::get('edit-product/{id}', [ProductController::class, 'edit'])->name('edit-product');
    Route::put('update-product/{id}', [ProductController::class, 'update'])->name('update-product');
    Route::get('delete-product/{id}', [ProductController::class, 'destroy'])->name('delete-product');

    Route::get('colors', [ColorController::class, 'index'])->name('colors');
    Route::post('insert-colors', [ColorController::class, 'insert'])->name('insert-colors');
    Route::get('edit-color/{id}', [ColorController::class, 'edit'])->name('edit-color');
    Route::put('update-colors/{id}', [ColorController::class, 'update'])->name('update-colors');
    Route::get('delete-colors/{id}', [ColorController::class, 'destroy'])->name('delete-colors');
});
