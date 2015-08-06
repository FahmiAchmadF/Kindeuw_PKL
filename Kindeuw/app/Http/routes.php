<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('Admin/create', 'KindeuwController@create');
Route::post('Admin/index', 'KindeuwController@store');
Route::get('Admin/index', 'CustomLoginController@index');
Route::get('Admin/{id}', 'CustomLoginController@baca');
Route::delete('Admin/hapus/{id}',array(
	'uses' => 'KindeuwController@hapus', 'as' => 'Kindeuw'));
Route::get('Admin/ubah/{id}', 'KindeuwController@edit');
Route::put('Admin/ubah/lagi/{id}',array(
        'uses' => 'KindeuwController@ubah', 'as' => 'Kindeuw'));
Route::post('Admin/search/search/search', 'CustomLoginController@cari');
Route::get('index', 'CustomLoginController@getlogin');
Route::get('Kindeuw/index/index/logout', 'CustomLoginController@logout');
Route::post('Kindeuw/index/index', 'CustomLoginController@postlogin');



Route::get('Kindeuw', 'KindeuwController@index');
Route::get('Kindeuw/{id}', 'KindeuwController@baca');
Route::get('Kindeuw/About/About', 'KindeuwController@about');
Route::get('Kindeuw/Contact/Contact', 'KindeuwController@kontak');
Route::post('Kindeuw/search/search/search', 'KindeuwController@cari');
Route::get('Kindeuw/pdf/pdf/{id}', 'KindeuwController@pdf');
Route::get('Kindeuw/excel/excel', 'KindeuwController@excel');
Route::get('Kindeuw/daftar/akun', 'KindeuwController@daftar');
Route::post('Kindeuw/daftar/akun/cek', 'KindeuwController@regis');

Route::get('transaksi/{id}', 'KindeuwController@transaksi');
Route::post('transaksi/proses', 'KindeuwController@posttransaksi');
Route::get('transaksiku/caritransaksiku', 'KindeuwController@caritransaksiku');
Route::post('transaksiku', 'KindeuwController@hasilcaritransaksi');
Route::get('konfirmasi/pembayaran/{id}', 'KindeuwController@konfirmasipembayaran');
Route::post('konfirmasi/proses', 'KindeuwController@konfirmasipost');
Route::get('konfirmasi/penerimaanbarang/{id}', 'KindeuwController@konfirmasipenerimaanbarang');
Route::get('Admin/list/transaksi', 'KindeuwController@listtransaksi');
Route::get('Admin/transaksi/terima/transfer/{id}', 'KindeuwController@terimatransaksi');
Route::get('Admin/transaksiuser/{id}', 'KindeuwController@detailtransaksiuser');
Route::delete('Admin/transaksi/hapus/{id}', array(
	'uses' => 'KindeuwController@delete', 'as' => 'Transakasi'));
Route::get('Admin/tambah/genre', 'KindeuwController@tambahgenre');
Route::post('Admin/tambah/genre/submit', 'KindeuwController@tambahgenrepost');
Route::get('Admin/tambah/bahasa/buku', 'KindeuwController@tambahbahasa');
Route::post('Admin/tambah/bahasa/post', 'KindeuwController@tambahbahasapost');
Route::get('Admin/tambah/kurir', 'KindeuwController@tambahkurir');
Route::post('Admin/tambah/kurir/simpan', 'KindeuwController@tambahkurirpost');
Route::get('Admin/tambah/kota', 'KindeuwController@tambahkota');
Route::post('Admin/tambah/kota/simpan', 'KindeuwController@tambahkotapost');
Route::get('genre/ubah/{id}', 'KindeuwController@ubahgenre');
Route::put('genre/ubah/genre/{id}', array(
	'uses' => 'KindeuwController@ubahgenrepost'));
Route::delete('genre/hapus/genre/{id}', 'KindeuwController@hapusgenre');
Route::get('bahasa/ubah/{id}', 'KindeuwController@ubahbahasa');
Route::put('bahasa/ubah/bahasa/{id}', array(
	'uses' => 'KindeuwController@ubahbahasapost'));
Route::delete('bahasa/hapus/bahasa/{id}', 'KindeuwController@hapusbahasa');
Route::get('kurir/ubah/{id}', 'KindeuwController@ubahkurir');
Route::put('kurir/ubah/kurir/{id}', array(
	'uses' => 'KindeuwController@ubahkurirpost'));
Route::delete('kurir/hapus/kurir/{id}', array(
	'uses' => 'KindeuwController@hapuskurir', 'as' => 'Kurir'));
Route::get('kota/ubah/{id}', 'KindeuwController@ubahkota');
Route::put('kota/ubah/kota/{id}', array(
	'uses' => 'KindeuwController@ubahkotapost'));
Route::delete('kota/hapus/kota/{id}', 'KindeuwController@hapuskota');