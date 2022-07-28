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

Route::get('/intervention', [App\Http\Controllers\interventionController::class, 'index'] );

Route::get('/carbon', [App\Http\Controllers\CarbonController::class, 'index'] );

Route::get('/cetak', [App\Http\Controllers\DomController::class, 'index'] );
