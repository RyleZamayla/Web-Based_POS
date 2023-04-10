<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
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
});

// admin routes
Route::get('admin/products', [AdminController::class, 'adminGetAllProducts'])->name('admin.products');
Route::get('admin/products/comments', [AdminController::class, 'adminGetAllComments'])->name('admin.products.comments');
Route::delete('admin/products/{id}', [AdminController::class, 'adminDeleteProduct'])->name('admin.products.delete');
Route::delete('admin/products/comments/{id}', [AdminController::class, 'adminDeleteComment'])->name('admin.products.comments.delete');



Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');


//comment routes
Route::post('/products/{id}', [CommentController::class, 'addComment'])->name('products.comment.add');

