<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdinateurController;
use App\Http\Controllers\AttributionController;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/ordinateur/show',[OrdinateurController::class, 'index']);
Route::post('/ordinateur/add',[OrdinateurController::class, 'store']);
Route::delete('/ordinateur/delete/{id}',[OrdinateurController::class, 'destroy']);

Route::post('/clients/search',[ClientController::class, 'search']);
Route::post('/client/add',[ClientController::class, 'store']);
Route::get('/clients/show',[ClientController::class, 'index']);

Route::get('/attribution/show',[AttributionController::class, 'index']);
Route::post('/attribution/add',[AttributionController::class, 'store']);
Route::delete('/attribution/delete/{id}',[AttributionController::class, 'destroy']);