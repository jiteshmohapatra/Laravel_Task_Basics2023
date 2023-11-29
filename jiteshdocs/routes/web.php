<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\itcontroller;
use App\Http\Controllers\csvcontroller;

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
Route::get('save',[itcontroller::class,'fn4']);
Route::view('open','goto');
Route::post('goto',[csvcontroller::class,'fn10']);
