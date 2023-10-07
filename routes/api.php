<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function () {
    // Retrieve a list of music
    Route::get('music', 'MusicController@index');

    // Create a new music record
    Route::post('music', 'MusicController@store');

    // Retrieve a specific music record by its ID
    Route::get('music/{id}', 'MusicController@show');

    // Update a specific music record by its ID
    Route::put('music/{id}', 'MusicController@update');

    // Delete a specific music record by its ID
    Route::delete('music/{id}', 'MusicController@destroy');
});

