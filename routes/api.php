<?php

use App\Http\Controllers\ReimbursementController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'reimbursement'], function () {
    Route::resource('/', ReimbursementController::class);
    Route::post('/create', 'App\Http\Controllers\ReimbursementController@store');
    Route::post('/update/{id}', 'App\Http\Controllers\ReimbursementController@update');
    Route::post('/destroy/{id}', 'App\Http\Controllers\ReimbursementController@destroy');
});
