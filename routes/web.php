<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AirportsController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\AirlinesController;
use Psr\Http\Message\ServerRequestInterface;


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

 
Route::get('/', function (ServerRequestInterface $request) {
    //
});


Route::get('/', function () {
    return view('oro_linijos');
});

route::get('/oro_linijos', [AirportsController::class, 'index']);
route::get('/Avalinijos', [AirlinerController::class, 'index']);
route::get('/Salys', [CountriesController::class, 'index']);


Route::get('/Salys', [CountriesController::class, 'show']);
Route::get('/salys_New', [CountriesController::class,'create']);
Route::get('/salys_edit/{countries}', [CountriesController::class, 'edit']);
Route::get('/salys_delete/{countries}', [CountriesController::class, 'destroy']);
Route::post('/Salys', [CountriesController::class, 'store']);


Route::get('/oro_linijos', [AirlinesController::class, 'show']);
Route::get('/oro_linijos_add', [AirlinesController::class,'create']);
Route::get('/oro_linijos_edit/{airlines}', [AirlinesController::class, 'edit']);
Route::get('/oro_linijos_istrynti/{airlines}', [AirlinesController::class, 'destroy']);
Route::post('/oro_linijos', [AirlinesController::class, 'store']);


Route::get('/Avalinijos', [AirportsController::class, 'show']);
Route::get('/Avalinijos_New', [AirportsController::class,'create']);
Route::get('/Avalinijos_edit/{airlines}', [AirportsController::class, 'edit']);
Route::get('/Avalinijos_delete/{airlines}', [AirportsController::class, 'destroy']);
Route::post('/Avalinijos', [AirportsController::class, 'store']);


//Route::post('/countries/update/', function()
//{
//});

 //Route::get('/oro_linijos', function () {
 //   return view('oro_linijos');
//});

// Route::get('/Avalinijos', function () {
//     return view('Avalinijos');
//  });


