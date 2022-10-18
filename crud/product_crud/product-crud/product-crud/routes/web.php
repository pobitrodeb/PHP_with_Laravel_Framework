<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomController;

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
Route::get('/', [HomController::class, 'index'])->name('home');
Route::get('/create-product', [HomController::class, 'create'])->name('create-product');
Route::get('/manage-product', [HomController::class, 'manage'])->name('manage-product');
Route::get('/edit-product,{id}', [HomController::class, 'edit'])->name('edit-product');
Route::get('/delete-product,{id}', [HomController::class, 'delete'])->name('delete-product');


//#################### for post  ##################
Route::post('/new-product', [HomController::class, 'newProduct'])->name('new-product');
Route::post('/update-product/{id}', [HomController::class, 'update'])->name('update.product');
