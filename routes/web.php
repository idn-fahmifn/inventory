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

Route::get('/', 'SearchController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// route untuk ruangan
Route::resource('kategori', 'KategoriController');
Route::resource('user', 'UserController');
Route::resource('ruangan', 'RuanganController');
Route::resource('barang', 'BarangController');

//  sama aja dengan kita menambahkan : 
/*
    route::get('kategori','KategoriController@index');
    route::get('kategori/{id}/edit','KategoriController@edit');
    route::put('kategori/{id}/update','KategoriController@update');
    route::get('kategori/{id}','KategoriController@show');
    route::post('kategori/{id}/update','KategoriController@delete');

*/
