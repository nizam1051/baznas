<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AdmKabarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\KabarController;

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

//Front End

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
// Route::get('/berita', function () {
//     return view('kabar.berita');
// });
Route::get('/video-kegiatan', function () {
    return view('kabar.video-kegiatan');
});
// Route::get('/galeri', function () {
//     return view('galeri');
// });
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


Route::get('berita', [KabarController::class, 'Berita']);
Route::get('galeri', [KabarController::class, 'Galeri']);

// Backend
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'storeLogin']);
Route::middleware('auth')->group(function () {
    Route::middleware('is.admin')->group(function () {
        Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {
            Route::get('logout', [AuthController::class, 'logout'])->name('logout');
            Route::get('/', [HomeController::class, 'index']);
            Route::get('berita', [AdmKabarController::class, 'indexBerita'])->name('index.berita');
            Route::get('berita/add', [AdmKabarController::class, 'createBerita'])->name('add.berita');
            Route::post('berita/store', [AdmKabarController::class, 'storeBerita'])->name('store.berita');
            Route::get('berita/edit/{beritaID}', [AdmKabarController::class, 'editBerita']);
            Route::post('berita/update/{beritaID}', [AdmKabarController::class, 'updateBerita']);
            Route::get('berita/delete/{beritaID}', [AdmKabarController::class, 'destroyBerita']);

            Route::get('galeri', [AdmKabarController::class, 'indexGaleri'])->name('index.galeri');
            Route::get('galeri/add', [AdmKabarController::class, 'createGaleri'])->name('add.galeri');
            Route::post('galeri/store', [AdmKabarController::class, 'storeGaleri'])->name('store.galeri');
            Route::get('galeri/edit/{galeriID}', [AdmKabarController::class, 'editGaleri']);
            Route::post('galeri/update/{galeriID}', [AdmKabarController::class, 'updateGaleri']);
            Route::get('galeri/delete/{galeriID}', [AdmKabarController::class, 'destroyGaleri']);
        });
    });
});
