<?php

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
});

Route::get('test', function(){
    return view('test');
});

Route::get('customer/', 'T_customerController@index');
Route::get('customer/create', 'T_customerController@create');
Route::post('customer/store', 'T_customerController@store');
Route::get('customer/edit/{id?}', 'T_customerController@edit');
Route::post('customer/update/{id?}', 'T_customerController@update');
Route::get('customer/destroy/{id?}', 'T_customerController@destroy');

Route::get('product/', 'T_productController@index');
Route::get('product/create', 'T_productController@create');
Route::post('product/store', 'T_productController@store');
Route::get('product/edit/{id?}', 'T_productController@edit');
Route::post('product/update/{id?}', 'T_productController@update');
Route::get('product/destroy/{id?}', 'T_productController@destroy');

Route::get('sale/', 'T_saleController@index');
Route::get('sale/create', 'T_saleController@create');
Route::post('sale/store', 'T_saleController@store');
Route::get('sale/edit/{id?}', 'T_saleController@edit');
Route::post('sale/update/{id?}', 'T_saleController@update');
Route::get('sale/destroy/{id?}', 'T_saleController@destroy');

Route::get('salesdata/', 'T_salesdataController@index');
Route::get('salesdata/create/{id?}', 'T_salesdataController@create');
Route::post('salesdata/store', 'T_salesdataController@store');
Route::get('salesdata/edit/{id?}', 'T_salesdataController@edit');
Route::post('salesdata/update/{id?}', 'T_salesdataController@update');
Route::get('salesdata/destroy/{id?}', 'T_salesdataController@destroy');
