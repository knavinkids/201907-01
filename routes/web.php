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

//Route::get('/', function () {return view('welcome');});
Route::get('/', function () {return view('BootstrapAdmin/index');});
Route::get('/aa', 'BarangController@aa');
Route::get('/ab', 'BarangController@ab');
Route::get('/tdt', function () {return view('BootstrapAdmin/table_datatable');});

Route::get('/siswa','SiswaController@index');
Route::post('/siswa/create','SiswaController@create');
Route::get('/siswa/{id}/edit','SiswaController@edit');
Route::post('/siswa/{id}/update','SiswaController@update');
Route::get('/siswa/{id}/delete','SiswaController@delete');
Route::Group(['Prefix' => 'Social-Media', 'Namespace' => 'Auth'], 
	Function(){
		Route::Get('Register/{Provider}', 'SocialiteController@Register');
    	Route::Get('Registered/{Provider}', 'SocialiteController@Registered');
    });

Auth::routes();

Route::group(['prefix' => 'barang'], function () {
    Route::get('/', 'BarangController@ab');
    Route::get('/fetch_data', 'BarangController@fetch_data');
    Route::get('/fetchdata', 'BarangController@fetchdata');
    Route::match(['get', 'post'], 'create', 'BarangController@create');
    Route::match(['get', 'put'], 'edit/{id}', 'BarangController@edit');
    Route::get('delete/{kode}', 'BarangController@delete');
    Route::post('simpan','BarangController@simpan');

});
//Route::get('/', 'BarangController@index');
Route::get('/retail', 'BarangController@index');
/*Route::get('/barang', 'BarangController@index');
Route::post('/barang/baru','BarangController@baru');
Route::post('/barang/goto/{kode}','BarangController@goto');
Route::post('/barang/baru2','BarangController@baru2');
Route::get('/barang/{kode}/edit','BarangController@edit');
Route::post('/barang/{kode}/update','BarangController@update');
Route::get('/barang/{kode}/delete','BarangController@delete');
Route::post('/barang/simpan','BarangController@simpan');
Route::get('/barang/json','BarangController@json');
Route::get('/barang/cari','BarangController@cari');
*/
Route::get('/kontak', 'KontakController@index1');
Route::get('/kontak/{kode}/edit','KontakController@edit2');
Route::get('/kontak/{tipex}', 'KontakController@index2');
Route::get('/kontak/{kode}/{tipex}/edit','KontakController@edit');
Route::get('/kontak/{kode}/{tipex}/delete','KontakController@delete');
Route::post('/kontak/{kode}/{tipex}/update','KontakController@update');	
Route::get('/listView', function () {return view('listView');});
/*
Route::post('/kontak/{tipex}/baru','KontakController@baru');
Route::get('/kontak/{tipex}/{kode}/edit','KontakController@edit');
Route::post('/kontak/{tipex}/{kode}/update','KontakController@update');
Route::get('/kontak/{tipex}/{kode}/delete','KontakController@delete');

/*
Route::post('/kontak/baru','KontakController@baru');
Route::get('/kontak/{kode}/edit','KontakController@edit');
Route::post('/kontak/{kode}/update','KontakController@update');
Route::get('/kontak/{kode}/delete','KontakController@delete');
Route::post('/pelanggan/baru','KontakController@baru');
Route::get('/pelanggan/{kode}/edit','KontakController@edit');
Route::post('/pelanggan/{kode}/update','KontakController@update');
Route::get('/pelanggan/{kode}/delete','KontakController@delete');
*/

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login1', 'SiswaController@login2');
Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('/auth/{sosmed}','HomeController@connect');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');
Route::get('redirect/{driver}', 'Auth\LoginController@redirectToProvider')
    ->name('login.provider')
    ->where('driver', implode('|', config('auth.socialite.drivers')));

