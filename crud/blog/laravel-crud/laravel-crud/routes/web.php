<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [BlogController::class, 'index'])->name('home');
Route::get('/add-blog', [BlogController::class, 'add'])->name('blog.add');
Route::get('/manage-blog', [BlogController::class, 'manage'])->name('blog.manage');
Route::get('/edit-blog/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::get('/delete-blog/{id}', [BlogController::class, 'delete'])->name('blog.delete');

//########### product ###################
Route::get('/add-product', [ProductController::class, 'add'])->name('product.add');
Route::get('/mange-product', [ProductController::class, 'manage'])->name('product.mange');
//################# Form #########################
Route::post('/blog.new', [BlogController::class, 'create'])->name('blog.new');
Route::post('/update-blog/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::post('/product.new', [ProductController::class, 'create'])->name('product.new');
