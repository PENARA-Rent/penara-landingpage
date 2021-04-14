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
    return view('index');
})->name('index');

Route::group(['prefix' => 'service'], function()
{
    
    Route::get('list', 'ServiceController@list')->name('service.list');    
    Route::get('detail/{id}', 'ServiceController@detail')->name('service.detail');    
    
});

Route::group(['prefix' => 'car'], function()
{
    
    Route::get('list', 'CarController@list')->name('car.list');    
    Route::get('detail/{id}', 'CarController@detail')->name('car.detail');    
    
});




