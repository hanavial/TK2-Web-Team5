<?php

use App\Http\Controllers\NilaiController;
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

Route::get('/',[NilaiController::class,'index'])->name('index');
Route::get('/table',[NilaiController::class,'table'])->name('table');
Route::get('/create',[NilaiController::class,'create'])->name('create');
Route::get('/show/{id}',[NilaiController::class,'show'])->name('show');
Route::get('/edit/{id}',[NilaiController::class,'edit'])->name('edit');
Route::post('/store',[NilaiController::class,'store'])->name('store');
Route::put('/update/{id}',[NilaiController::class,'update'])->name('update');
Route::delete('/delete/{id}',[NilaiController::class,'destroy'])->name('destroy');


