<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('admin.master');
// });

Route::get('/',[StudentController::class,'index'])->name('index');
Route::get('/show',[StudentController::class,'showTable'])->name('show.table');
Route::get('/add',[StudentController::class,'addList'])->name('add.list');
Route::post('/store',[StudentController::class,'studentStore'])->name('student.store');
Route::get('/edit/{id}',[StudentController::class,'studentEdit'])->name('student.edit');
Route::post('/update',[StudentController::class,'studentUpdate'])->name('student.update');
Route::get('/delete/{id}',[StudentController::class,'studentDelete'])->name('student.delete');


