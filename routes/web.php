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
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'satuan-kerja'], function(){
    route::get('/', 'SatuankerjaController@index')->name('satuan-kerja');
    route::post('/store', 'SatuankerjaController@store')->name('satuan-kerja.store');
    route::get('/edit/{unit}', 'SatuankerjaController@edit')->name('satuan-kerja.edit');
    route::put('/update/{unit}', 'SatuankerjaController@update')->name('satuan-kerja.update');
    route::delete('/delete/{unit}', 'SatuankerjaController@destroy')->name('satuan-kerja.delete');
});

Route::group(['prefix' => 'kotak-arsip'], function(){
    route::get('/','KotakarsipController@index')->name('kotak-arsip');
    route::get('/edit/{box}','KotakarsipController@edit')->name('kotak-arsip.edit');
    route::put('/update/{box}','KotakarsipController@update')->name('kotak-arsip.update');
    route::post('/store/{box}','KotakarsipController@store')->name('kotak-arsip.store');
    route::get('/show/{box}','KotakarsipController@show')->name('kotak-arsip.show');
});

Route::group(['prefix'  => 'classification'], function(){
    route::get('/','ClassficationController@index')->name('classification');
    route::get('/create','ClassficationController@create')->name('classification.create');
    route::post('/store','ClassficationController@store')->name('classification.store');
    route::get('/edit/{classification}','ClassficationController@edit')->name('classification.edit');
    route::put('/update/{classification}','ClassficationController@update')->name('classification.update');
});

Route::post('autocomplete','KotakarsipController@autocomplete')->name('autocomplete');

Route::group(['prefix' => 'rekap-arsip'], function(){
    route::get('/','RekaparsipController@index')->name('rekap-arsip');
    route::get('/edit/{box}','RekaparsipController@edit')->name('rekap-arsip.edit');
    route::post('/store/{box}','RekaparsipController@store')->name('rekap-arsip.store');
    route::get('/show/{box}','RekaparsipController@show')->name('rekap-arsip.show');
});

route::get('/form-input/kedalaman/{box}','InputkedalamanController@edit')->name('form-input.kedalaman');
route::put('/update/kedalaman/{record}','InputkedalamanController@update')->name('update.kedalaman');

route::get('/label-arsip/show{record}','LabelController@singleRecord')->name('label-arsip.show');
route::get('/daftar-arsip/show{record}','DaftararsipController@singleRecord')->name('daftar-arsip.show');

Route::get('/home', 'HomeController@index')->name('home');
