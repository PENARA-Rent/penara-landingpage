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

Route::get('/', 'IndexController@index')->name('index');

Route::get('/gallery', 'PhotoController@list')->name('gallery');

Route::group(['prefix' => 'service'], function()
{
    
    Route::get('list', 'ServiceController@list')->name('service.list');    
    Route::get('detail/{id}', 'ServiceController@detail')->name('service.detail');    
    
});

Route::group(['prefix' => 'car'], function()
{    
    Route::get('list/{brandId?}', 'CarController@list')->name('car.list');    
    Route::get('detail/{id}', 'CarController@detail')->name('car.detail');        
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin',  'middleware' => ['auth']], function(){
    Route::get('/', 'AdminController@index')->name('admin.index');        
    
    Route::group(['prefix' => 'car'], function(){
        Route::get('/list', 'CarController@adminList')->name('admin.car.list');        
        Route::get('/add', 'CarController@addForm')->name('admin.car.add');
        Route::post('/store', 'CarController@store')->name('admin.car.store');
        Route::get('/detail/{id}', 'CarController@adminDetail')->name('admin.car.detail');
        Route::post('/edit', 'CarController@edit')->name('admin.car.edit');
    });   
});
