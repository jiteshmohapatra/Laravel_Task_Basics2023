<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\democontroller;
use App\Http\Controllers\aditcontroller;
use App\Http\Controllers\demo1controller;
use App\Http\Controllers\ibmcontroller;

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
Route::get('save',[democontroller::class,'fn1']);
Route::get('open',[aditcontroller::class,'index']);
Route::get('fopen',[demo1controller::class,'fn3']);
Route::get('point',[ibmcontroller::class,'fn12']);