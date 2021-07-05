<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	$title = "Cadastro de Vendas";
	return view('index', ['title' => $title]);
});

Route::get('/seller', 'SellerController@index')->name('seller.index');
Route::get('/seller/create', 'SellerController@create')->name('seller.create');
Route::post('/seller/store', 'SellerController@store')->name('seller.store');

Route::get('/sales/', 'SalesController@index')->name('sales.index');
Route::get('/sales/select', 'SalesController@select')->name('sales.select');
Route::post('/sales/create', 'SalesController@create')->name('sales.create');
Route::post('/sales/store',  'SalesController@store')->name('sales.store');
Route::get('/sales/{seller_id}',  'SalesController@show')->name('sales.show');

