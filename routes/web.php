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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'FrontendController@index')->name('/');
    Route::get('/welcome', 'FrontendController@index');
    //frontend artikel
    Route::get('/artikel', 'FrontendController@artikel');
    Route::get('/artikel-view/{id}', 'FrontendController@viewArtikel');
    Route::get('/komentar/{id}', 'FrontendController@komentar');
    Route::post('/tambah-komentar/{id}', 'FrontendController@storekomentar');

    Route::get('/kegiatan', 'FrontendController@kegiatan');
    Route::get('/kegiatan-view/{id}', 'FrontendController@viewKegiatan');

    Route::get('/pengumuman', 'FrontendController@pengumuman');
    Route::get('/pengumuman-view/{id}', 'FrontendController@viewPengumuman');

    Route::get('/lomba-daftar/{id}', 'FrontendController@lombaDaftarview');
    Route::post('/tambah-pendaftaran-lomba', 'FrontendController@tambahpendaftaran');
    Route::post('/tambah-pendaftaran-lainnya', 'FrontendController@tambahpendaftaranlainnya');

    Route::get('/about', 'FrontendController@about');
    Route::get('/pendaftaran', 'FrontendController@pendaftaran');
    Route::get('/pendaftranlomba', 'FrontendController@daftarlomba');

    Route::get('/jurnal', 'FrontendController@jurnal');

});
Auth::routes();
Route::get('peserta-login','Auth\PesertaLoginController@formlogin');
Route::post('peserta-login', ['as' => 'peserta-login', 'uses' => 'Auth\PesertaLoginController@login']);


Route::get('peserta-register','Auth\PesertaLoginController@showRegisterPage');
Route::post('peserta-register', 'Auth\PesertaLoginController@register')->name('peserta-register');


Route::group(['middleware' => ['web'], 'prefix' => 'admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/listpendaftaran','Admin\PendaftaranController@index')->name('listpendaftaran');
    Route::get('/pendaftaran-view/{id}', 'Admin\PendaftaranController@view');
    //kegiatan
    Route::get('/kegiatan-index', 'Admin\KegiatanController@index')->name('kegiatan-index');
    Route::get('/kegiatan-form', 'Admin\KegiatanController@tambahform')->name('kegiatan-form');
    Route::post('/kegiatan-store', 'Admin\KegiatanController@store');
    Route::get('/kegiatan-view/{id}', 'Admin\KegiatanController@view');
    Route::get('/editform2/{id}', 'Admin\KegiatanController@editform');
    Route::patch('/kegiatanedit/{id}', 'Admin\KegiatanController@edit')->name('editkegiatan1');

    Route::get('/kegiatan-juara', 'Admin\KegiatanController@indexJuara');
    Route::get('/form-juara/{id}', 'Admin\KegiatanController@formJuara');
    Route::post('/update-juara/{id}', 'Admin\KegiatanController@updateJuara');
    Route::get('/kegiatan-edit/{id}', 'Admin\KegiatanController@editform');
    Route::get('/kegiatan-hapus/{id}', 'Admin\KegiatanController@destroy');
    //jenis kegiatan
    Route::get('/jenis-kegiatan-index', 'Admin\JenisKegiatanController@index')->name('jenis-kegiatan-index');
    Route::get('/jenis-kegiatan-form/', 'Admin\JenisKegiatanController@tambahform')->name('jenis-kegiatan-form');
    Route::get('/jenis-kegiatan-coba/', 'Admin\JenisKegiatanController@coba');
    Route::get('/jenis-kegiatan-hapus/{id}', 'Admin\JenisKegiatanController@destroy');

    Route::post('/jeniskegiatan', 'Admin\JenisKegiatanController@store');
    Route::get('/jenis-kegiatan-edit/{id}', 'Admin\JenisKegiatanController@editform');
    Route::patch('/jeniskegiatanedit/{id}', 'Admin\JenisKegiatanController@edit')->name('editkegiatan');

    //artikel
    Route::get('/artikel-index', 'Admin\ArtikelController@index');
    Route::get('/artikel-view/{id}', 'Admin\ArtikelController@view');
    Route::get('/artikel-form', 'Admin\ArtikelController@tambahform');
    Route::post('/artikel', 'Admin\ArtikelController@store');
    Route::get('/editform1/{id}', 'Admin\ArtikelController@editform');
    Route::patch('/artikeledit/{id}', 'Admin\ArtikelController@edit')->name('editartikel');
    Route::get('/artikel-hapus/{id}', 'Admin\ArtikelController@destroy');

    //jurnal
    Route::get('/jurnal-index', 'Admin\JurnalController@index');
    Route::get('/jurnal-form/', 'Admin\JurnalController@tambahform')->name('jurnal-form');
    Route::get('/jurnal-edit/{id}', 'Admin\JurnalController@editform');
    Route::get('/jurnal-hapus/{id}', 'Admin\JurnalController@destroy');

    Route::post('/jurnal', 'Admin\JurnalController@store');
    Route::patch('/jurnaledit/{id}', 'Admin\JurnalController@edit')->name('editjurnal');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
