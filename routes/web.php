<?php
use App\Http\Controllers\pages\tablesController;
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
