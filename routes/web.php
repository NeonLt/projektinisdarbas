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




Route::get('/oro_linijos', [AirportsController::class, 'index']);
Route::get('/Avialinijos', [AirlinesController::class, 'index']);
Route::get('/Salys', [CountriesController::class, 'index']);


// Route::get('/Salys', [CountriesController::class, 'show']);
Route::get('/salys_New', [CountriesController::class, 'create']);
Route::get('/salys_edit/{countries}', [CountriesController::class, 'edit']);
Route::get('/salys_delete/{countries}', [CountriesController::class, 'delete']);
Route::get('/salys_delete/{countries}/confirm', [CountriesController::class, 'destroy']);
Route::post('/salys_New', [CountriesController::class, 'store']);
Route::post('/salys_edit/{countries}', [CountriesController::class, 'update']);

Route::get('/', [AirlinesController::class, 'index']);
Route::get('/oro_linijos', [AirlinesController::class, 'show']);
Route::get('/oro_linijos_New', [AirlinesController::class, 'create']);
Route::get('/oro_linijos_add/{airlines}', [AirlinesController::class, 'add']);
Route::post('/airports_add_airline_post/{airports}', [AirportsController::class, 'airports_add_airline_post']);

Route::get('/oro_linijos_edit/{airlines}', [AirlinesController::class, 'edit']);
Route::get('/oro_linijos_delete/{airlines}', [AirlinesController::class, 'delete']);
Route::get('/oro_linijos_istrynti/{airlines}', [AirlinesController::class, 'confirm']);
Route::get('/oro_linijos_istrynti/{airlines}/confirm', [AirlinesController::class, 'destroy']);
Route::post('/oro_linijos_store', [AirlinesController::class, 'store']);
Route::post('/oro_linijos/{airlines}', [AirlinesController::class, 'update']);
Route::post('/oro_linijos_ieskoti', [AirlinesController::class, 'search']);


Route::get('/Avialinijos', [AirportsController::class, 'index']);
Route::get('/Avialinijos_new', [AirportsController::class, 'create']);
Route::get('/Avialinijos_edit/{airports}', [AirportsController::class, 'edit']);
Route::get('/Avialinijos_delete/{airports}', [AirportsController::class, 'delete']);
Route::get('/Avialinijos_delete/{airports}/confirm', [AirportsController::class, 'destroy']);
Route::post('/Avialinijos_store', [AirportsController::class, 'store']);
Route::post('/Avialinijos/{airports}', [AirportsController::class, 'update']);


//Route::post('/countries/update/', function()
//{
//});

 //Route::get('/oro_linijos', function () {
 //   return view('oro_linijos');
//});

// Route::get('/Avalinijos', function () {
//     return view('Avalinijos');
//  });
