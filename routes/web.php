<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\OwnerController;
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


Route::get('/cars', [CarController::class,'showCars']);
Route::get('/cars/add', [CarController::class,'showCars'])->name('cars');


// {} - bet kokie kintamieji, turi būti paskutiniai
//Route::get('/cars/{name}', [CarController::class,'showCars']);

Route::resource('cars',CarController::class);

Route::get('/owners', [OwnerController::class,'showOwners']);
Route::get('/owners/add', [OwnerController::class,'showOwners'])->name('owners');


// {} - bet kokie kintamieji, turi būti paskutiniai
//Route::get('/cars/{name}', [CarController::class,'showCars']);

Route::resource('owners',OwnerController::class);

