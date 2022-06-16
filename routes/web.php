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

Route::get('/', function () {
    return view('index');
});
Route::get('/legalitas', function () {
    return view('tentang-kami/legalitas');
});
Route::get('/visi-misi', function () {
    return view('tentang-kami/visi-misi');
});
Route::get('/struktur-organisasi', function () {
    return view('tentang-kami/struktur-organisasi');
});
Route::get('/organisasi', function () {
    return view('tentang-kami/organisasi');
});
Route::get('/sejarah-organisasi', function () {
    return view('tentang-kami/sejarah-organisasi');
});
Route::get('/zakat', function () {
    return view('bayar.zakat');
});
Route::get('/kabar-zakat', function () {
    return view('kabar.kabar-zakat');
});
Route::get('/inspirasi', function () {
    return view('kabar.inspirasi');
});
Route::get('/article', function () {
    return view('kabar.article');
});
Route::get('/pendistribusian', function () {
    return view('kabar.pendistribusian');
});
Route::get('/berita', function () {
    return view('kabar.berita');
});
Route::get('/video-kegiatan', function () {
    return view('kabar.video-kegiatan');
});
Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/hubungi-kami', function () {
    return view('hubungi-kami');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/rekening-zakat', function () {
    return view('layanan.rekening-zakat');
});
Route::get('/rekening-infak', function () {
    return view('layanan.rekening-infak');
});
Route::get('/rekening-sedekah', function () {
    return view('layanan.rekening-sedekah');
});
Route::get('/rekening-fidyah', function () {
    return view('layanan.rekening-fidyah');
});
Route::get('/layanan-pembayaran', function () {
    return view('layanan.layanan-pembayaran');
});