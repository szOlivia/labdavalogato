<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\szinController;

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


Route::get('/labdavalogato', function(){
    return view("labdavalogato");
});

Route::get('/', function(){
    return view("kezdo");
});


Route::post("/szinMentes",[szinController::class,"mentes"]);