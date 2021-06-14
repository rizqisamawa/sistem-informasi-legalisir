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
//halaman awal
Route::get('/','ArsipController@home');
Route::get('/persyaratan','ArsipController@persyaratan');
    // Auth
    Route::get('/login','AuthController@login')->name('login');
    Route::post('/postlogin','AuthController@postlogin');
        
Route::group(['middleware' => ['auth','CheckRole:admin,cek']],function(){
    //ktp
    Route::get('/ktp','CekController@ktp');
    Route::post('/ktp/tktp','CekController@tktp');
    Route::get('/ktp/{id}/ubahktp','CekController@uktp');
    Route::post('/ktp/{id}/gktp','CekController@gktp');        
    Route::get('/ktp/{id}/hapus','CekController@hktp');
        //kk
        Route::get('/kk','CekController@kk');
        Route::post('/kk/tkk','CekController@tkk');
        Route::get('/kk/{id}/dtlkk','CekController@dtlkk');
        Route::get('/kk/{id}/ubahkk','CekController@ukk');
        Route::post('/kk/{id}/gkk','CekController@gkk');        
        Route::get('/kk/{id}/hapus','CekController@hkk');
            //akta
            Route::get('/akta','CekController@akta');
            Route::post('/akta/takta','CekController@takta');
            Route::get('/akta/{id}/ubahakta','CekController@uakta');
            Route::post('/akta/{id}/gakta','CekController@gakta');        
            Route::get('/akta/{id}/hapus','CekController@hakta');
               //penduduk
               Route::get('/penduduk','CekController@penduduk');
               Route::post('/penduduk/tpenduduk','CekController@tpenduduk');
               Route::get('/penduduk/{id}/ubahpenduduk','CekController@upenduduk');
               Route::post('/penduduk/{id}/gpenduduk','CekController@gpenduduk');        
               Route::get('/penduduk/{id}/hapus','CekController@hpenduduk');
                    //buat akun
                    Route::get('/takun','AuthController@tmakun');
                    Route::post('/postakun','AuthController@postakun');
                    Route::get('/takun/{id}/hapus','AuthController@hapus');
});

Route::group(['middleware' => ['auth','CheckRole:arsip']],function(){
    //pengarsipan
    Route::get('/data','ArsipController@data');
    Route::get('/data/{id}/tganti','ArsipController@tganti');
    Route::post('/data/{id}/ganti','ArsipController@ganti');
    Route::get('/data/{id}/hapus','ArsipController@hapus');
    Route::post('/data/tambah','ArsipController@tambah');
    Route::get('/data/export','ArsipController@export');
});

Route::group(['middleware' => ['auth','CheckRole:admin,cek,arsip']],function(){
    Route::get('/dashboard','ArsipController@dashboard');
    Route::get('/logout','AuthController@logout');
});

Route::group(['middleware' => ['auth','CheckRole:cek,arsip']],function(){
    Route::get('/konfirmasi','ArsipController@konfirmasi');
    Route::get('/konfirmasi/{id}/skonfirmasi','ArsipController@skonfirmasi');
    Route::post('/konfirmasi/{id}/fkonfirmasi','ArsipController@fkonfirmasi');
    Route::get('/ckonfirmasi','ArsipController@ckonfirmasi');
    Route::post('/ckonfirmasi/tkonfirmasi','ArsipController@tkonfirmasi');
});