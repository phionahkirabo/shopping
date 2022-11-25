<?php
use App\Http\Controllers\pages\usersformController;

use App\Http\Controllers\pages\tablesController;
use App\Http\Controllers\pages\CountryController;
use App\Http\Controllers\pages\pagesController;
use Illuminate\Support\Facades\Route;

/*
|-------------------------------------------------;-------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [pagesController::class,'countries']);

Route::post('/saveCountry',[pagesController::class,'saveCountry']);
//Route::get('/', [pagesController::class,'countries']);
Route::get('/country', [tablesController::class,'table']);
//Route::get('/', [usersformController::class,'users']);
//Route::post('/saveuser',[usersformController::class,'saveuser']);
Route::resource('/manage_country', CountryController::class); 
Route::get('/edit/{code}',[CountryController::class,'edit'])->name('edit');
Route::put('editdata/{code}',[CountryController::class,'update']);

