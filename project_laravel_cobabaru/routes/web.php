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
    return view('folder_admin/dashboard');
});
Route::get('ruca', function () {
    return view('dashboard_anggota/dashboard');
});
Route::get('member', function () {
    return view('v_anggota/anggota');
});
Route::get('book', function () {
    return view('v_buku/buku');
});
Route::get('rakbuku', function () {
    return view('v_rak/rak');
});
Route::get('masuk', function () {
    return view('v_anggota/loginanggota');
});

use App\Http\Controllers\DashboardanggotaController;
Route::get('dashboardanggota', 'DashboardanggotaController@index');

use App\Http\Controllers\TampilbukuController;
Route::get('tampilbuku', 'TampilbukuController@index');

use App\Http\Controllers\HistoryController;
Route::get('history', 'HistoryController@index');

use App\Http\Controllers\HistorypetugasController;
Route::get('historypetugas', 'HistorypetugasController@index');

use App\Http\Controllers\LoginController;
Route::get('loginanggota', 'LoginController@index');
Route::post('/masuk', 'LoginController@masuk');
Route::get('/keluar', 'LoginController@keluar');

use App\Http\Controllers\BlogController;
Route::get('blog', 'BlogController@index');

use App\Http\Controllers\AnggotaController;
Route::get('anggota', 'AnggotaController@index');
Route::get('anggota/tambah', 'AnggotaController@tambah');
Route::get('anggota/simpan', 'AnggotaController@simpan');
Route::get('anggota/edit/{id}', 'AnggotaController@edit');
Route::post('anggota/update/', 'AnggotaController@update');
Route::get('anggota/hapus/{id}', 'AnggotaController@delete');

use App\Http\Controllers\PetugasController;
Route::get('petugas', 'PetugasController@index');
Route::get('petugas/tambah', 'PetugasController@tambah');
Route::get('petugas/simpan', 'PetugasController@simpan');
Route::get('petugas/edit/{id}', 'PetugasController@edit');
Route::post('petugas/update/', 'PetugasController@update');
Route::get('petugas/hapus/{id}', 'PetugasController@delete');

use App\Http\Controllers\BukuController;
Route::get('buku', 'BukuController@index');
Route::get('buku/tambah', 'BukuController@tambah');
Route::get('buku/simpan', 'BukuController@simpan');
Route::get('buku/edit/{id}', 'BukuController@edit');
Route::post('buku/update/', 'BukuController@update');
Route::get('buku/hapus/{id}', 'BukuController@delete');

use App\Http\Controllers\RakController;
Route::get('rak', 'RakController@index');
Route::get('rak/tambah', 'RakController@tambah');
Route::get('rak/simpan', 'RakController@simpan');
Route::get('rak/edit/{id}', 'RakController@edit');
Route::post('rak/update/', 'RakController@update');
Route::get('rak/hapus/{id}', 'RakController@delete');

use App\Http\Controllers\PengembalianController;
Route::get('pengembalian', 'PengembalianController@index');
Route::get('pengembalian/tambah', 'PengembalianController@tambah');
Route::get('pengembalian/simpan', 'PengembalianController@simpan');
Route::get('pengembalian/edit/{id}', 'PengembalianController@edit');
Route::post('pengembalian/update/', 'PengembalianController@update');
Route::get('pengembalian/hapus/{id}', 'PengembalianController@delete');

use App\Http\Controllers\PeminjamanController;
Route::get('peminjaman', 'PeminjamanController@index');
Route::get('peminjaman/tambah', 'PeminjamanController@tambah');
Route::post('peminjaman/simpan', 'PeminjamanController@simpan');
Route::get('peminjaman/edit/{id}', 'PeminjamanController@edit');
Route::post('peminjaman/update/', 'PeminjamanController@update');
Route::get('peminjaman/hapus/{id}', 'PeminjamanController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
