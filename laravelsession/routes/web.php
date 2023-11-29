<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userauth;

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
Route::post('output',[userauth::class,'userlogin']);
Route::view('check','login');
Route::view('pro','profile');
Route::get('/logout',function(){
    if(session()->has('user')){
        session()->pull('user',null);
    }
    return redirect('check');
});
