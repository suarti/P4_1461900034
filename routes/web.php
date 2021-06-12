<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\Excel;
use App\Exports\BukuExport;
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


Route::get('/',[BukuController::Class,'index']);
Route::get('/cari',[BukuController::Class,'carijoin']);
Route::get('/export', 'BukuController@export');