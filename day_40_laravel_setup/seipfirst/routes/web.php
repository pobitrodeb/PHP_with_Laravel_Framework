<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;

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

Route::get('/', [HomeController::class, 'index'] )->name('home');
Route::get('/course-add', [HomeController::class, 'add'] )->name('course.add');
Route::get('/course-manage', [CourseController::class, 'manage'] )->name('course.manage');
Route::get('/course-edit/{id}', [CourseController::class, 'edit'] )->name('course.edit');
Route::get('/course-delete/{id}', [CourseController::class, 'delete'] )->name('course.delete');


//CourseController
Route::post('/course-create', [CourseController::class, 'create'] )->name('course.create');
Route::post('/course-update/{id}', [CourseController::class, 'update'] )->name('course.update');
