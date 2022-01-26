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

Route::get('/','WelcomeController@index');

Auth::routes();

Route::group(['prefix' => 'satuan-kerja'], function(){
    route::get('/', 'SatuankerjaController@index')->name('satuan-kerja');
    route::get('/create', 'SatuankerjaController@create')->name('satuan-kerja.create');
    route::post('/store', 'SatuankerjaController@store')->name('satuan-kerja.store');
    route::get('/edit/{unit}', 'SatuankerjaController@edit')->name('satuan-kerja.edit');
    route::put('/update/{unit}', 'SatuankerjaController@update')->name('satuan-kerja.update');
    route::delete('/delete/{unit}', 'SatuankerjaController@destroy')->name('satuan-kerja.delete');
});

Route::group(['prefix' => 'kotak-arsip'], function(){
    route::get('/','KotakarsipController@index')->name('kotak-arsip');
    route::get('/edit/{box}','KotakarsipController@edit')->name('kotak-arsip.edit');
    route::get('/ubah/{box}','KotakarsipController@ubah')->name('kotak-arsip.ubah');
    route::put('/update/{box}','KotakarsipController@update')->name('kotak-arsip.update');
    route::put('/perbarui/{box}','KotakarsipController@perbarui')->name('kotak-arsip.perbarui');
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

route::get('/label-arsip/show/{record}','LabelController@singleRecord')->name('label-arsip.show');
route::get('/daftar-arsip/show/{record}','DaftararsipController@singleRecord')->name('daftar-arsip.show');
route::get('/daftar-arsip/edit/{record}','DaftararsipController@edit')->name('daftar-arsip.edit');
route::patch('/daftar-arsip/update/{record}', 'DaftararsipController@update')->name('daftar-arsip.update');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'upload'], function(){
    route::get('/', 'UploadController@index')->name('upload');
    route::get('/form', 'UploadController@create')->name('upload.form');
    route::post('/file', 'UploadController@store')->name('upload.file');
    route::get('/show/{upload}', 'UploadController@show')->name('upload.show');
    route::get('/edit/{upload}', 'UploadController@edit')->name('upload.edit');
    route::patch('/update/{upload}', 'UploadController@update')->name('upload.update');
    route::delete('/destroy/{upload}', 'UploadController@destroy')->name('upload.destroy');
    route::get('/download/{upload}', 'UploadController@download')->name('upload.download');
});

Route::group(['prefix' => 'invitations'], function(){
    route::get('/', 'InvitationController@index')->name('invitations');
    route::get('/create', 'InvitationController@create')->name('invitations.create');
    route::post('/store', 'InvitationController@store')->name('invitations.store');
    route::get('/edit/{user}', 'InvitationController@edit')->name('invitations.edit');
    route::patch('/update/{user}', 'InvitationController@update')->name('invitations.update');
    route::delete('/destroy/{user}', 'InvitationController@destroy')->name('invitations.destroy');
});

Route::group(['prefix' => 'daftar-isi'], function(){
    route::get('/','DaftarController@index')->name('daftar-isi');
    route::get('create/{box}','DaftarController@create')->name('daftar-isi.create');
    route::get('edit/{box}','DaftarController@edit')->name('daftar-isi.edit');
    route::patch('update/{content}','DaftarController@update')->name('daftar-isi.update');
    route::delete('destroy/{content}','DaftarController@destroy')->name('daftar-isi.destroy');
    route::post('store','DaftarController@store')->name('daftar-isi.store');
});

Route::group(['prefix'=>'cetak-periode'], function(){
    route::get('/rekap-arsip/','DaftarController@show')->name('cetak-periode.rekap-arsip');
    route::get('/daftar-isi-berkas/','DaftararsipController@show')->name('cetak-periode.daftar-isi-berkas');
});

Route::get('search','SeacrhController@show')->name('search');
Route::get('search/daftar-isi/','SeacrhController@index')->name('search.daftar-isi');
