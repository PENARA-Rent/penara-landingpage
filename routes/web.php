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

Route::get('/gallery', 'GalleryController@list')->name('gallery');
Route::get('/aboutus', 'AboutusController@index')->name('aboutus');

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
    
    Route::group(['prefix' => 'customer'], function(){
        Route::get('/list', 'CustomerController@list')->name('admin.customer.list');        
        // Route::get('/add', 'BrandController@addForm')->name('admin.brand.add');
        // Route::post('/store', 'BrandController@store')->name('admin.brand.store');
        Route::get('/detail/{id}', 'CustomerController@adminDetail')->name('admin.customer.detail');
        Route::post('/edit', 'CustomerController@edit')->name('admin.customer.edit');
    });  
    
    Route::group(['prefix' => 'brand'], function(){
        Route::get('/list', 'BrandController@list')->name('admin.brand.list');        
        Route::get('/add', 'BrandController@addForm')->name('admin.brand.add');
        Route::post('/store', 'BrandController@store')->name('admin.brand.store');
        Route::get('/detail/{id}', 'BrandController@adminDetail')->name('admin.brand.detail');
        Route::post('/edit', 'BrandController@edit')->name('admin.brand.edit');
    });   

    Route::group(['prefix' => 'car'], function(){
        Route::get('/list', 'CarController@adminList')->name('admin.car.list');        
        Route::get('/add', 'CarController@addForm')->name('admin.car.add');
        Route::post('/store', 'CarController@store')->name('admin.car.store');
        Route::get('/detail/{id}', 'CarController@adminDetail')->name('admin.car.detail');
        Route::post('/edit', 'CarController@edit')->name('admin.car.edit');
    });   

    Route::group(['prefix' => 'gallery'], function(){
        Route::get('/list', 'GalleryController@adminList')->name('admin.gallery.list');        
        Route::get('/add', 'GalleryController@addForm')->name('admin.gallery.add');
        Route::post('/store', 'GalleryController@store')->name('admin.gallery.store');
        Route::get('/detail/{id}', 'GalleryController@detail')->name('admin.gallery.detail');
        Route::get('/delete/{id}', 'GalleryController@delete')->name('admin.gallery.delete');
        
    });   
});
