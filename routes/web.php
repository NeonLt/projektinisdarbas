<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/oro_linijos', function () {
    return view('oro_linijos');
});

Route::get('/Avalinijos', function () {
    return view('Avalinijos');
});

Route::get('/Salys', function () {
    return view('Salys');
});

Route::get('/oro_linijos_edit', function () {
    return view('oro_linijos_edit');
});


Route::get('/oro_linijos_delete', function () {
    return view('oro_linijos_delete');
});

Route::get('/salys_edit', function () {
    return view('salys_edit');
});


Route::get('/salys_delete', function () {
    return view('salys_delete');
});


Route::get('/Avalinijos_delete', function () {
    return view('Avalinijos_delete');
});


Route::get('/Avalinijos_edit', function () {
    return view('Avalinijos_edit');
});


Route::get('/Avalinijos_New', function () {
    return view('Avalinijos_New');
});

Route::get('/oro_linijos_New', function () {
    return view('oro_linijos_New');
});

Route::get('/salys_New', function () {
    return view('salys_New');
});


Route::get('/oro_linijos_add', function () {
    return view('oro_linijos_add');
});

Route::get('/oro_linijos_istrynti', function () {
    return view('oro_linijos_istrynti');
});

Route::get('/oro_linijos_view', function () {
    return view('oro_linijos_view');
});

Route::get('/oro_linijos_ieskoti', function () {
    return view('oro_linijos_ieskoti');
});