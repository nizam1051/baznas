<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\KabarController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\Admin\AdmKabarController;

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

Route::controller(BerandaController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/legalitas', 'legalitas');
    Route::get('/visi-misi', 'visiMisi');
    Route::get('/struktur-organisasi', 'strukturOrganisasi');
    Route::get('/organisasi', 'organisasi');
    Route::get('/sejarah-organisasi', 'sejarahOrganisasi');
    Route::get('/zakat', 'zakat');
    Route::get('/inspirasi', 'inspirasi');
    Route::get('/article', 'article');
    Route::get('/pendistribusian', 'pendistribusian');
    Route::get('/video-kegiatan', 'videoKegiatan');
    Route::get('/hubungi-kami', 'hubungiKami');
    Route::get('/404', 'notFound');
    Route::get('/rekening', 'rekening');
    Route::get('/layanan-pembayaran', 'layananPembayaran');
    Route::get('/index-fitrah', 'indexFitrah');
    Route::get('/index-maal', 'indexMaal');
    Route::get('/index-fidyah', 'indexFidyah');
    Route::get('/index-qurban', 'indexQurban');
    Route::get('/index-infaq', 'indexInfaq');
    Route::get('/program-kemanusiaan', 'programKemanusiaan');
    Route::get('/program-pendidikan', 'programPendidikan');
    Route::get('/program-kesehatan', 'programKesehatan');
    Route::get('/program-advokasi-dakwah', 'programAdvokasiDakwah');
    Route::get('/program-ekonomi-produktif', 'programEkonomiProduktif');
    Route::get('/program-kkn', 'programKKN');
    Route::get('/program-beasiswa', 'programBeasiswa');
    Route::get('/program-distribusi', 'programDistribusi');
    Route::get('/program-pemberdayaan', 'programPemberdayaan');
    Route::get('/program-santunan', 'programSantunan');
    Route::get('/program-subsidi', 'programSubsidi');
});

Route::post('datajax/', [AjaxController::class, 'getDataRekening']);

Route::post('/index-fitrah', [KalkulatorController::class, 'calcFitrah']);
Route::post('/index-maal', [KalkulatorController::class, 'calcMaal']);
Route::post('/index-fidyah', [KalkulatorController::class, 'calcFidyah']);
Route::post('/index-qurban', [KalkulatorController::class, 'calcQurban']);
Route::post('/index-infaq', [KalkulatorController::class, 'calcInfaq']);
Route::get('kabar-zakat', [KabarController::class, 'KabarZakat']);
Route::get('kabar-zakat-detail/{id}', [KabarController::class, 'DetailKabarZakat']);
Route::get('artikel', [KabarController::class, 'Artikel']);
Route::get('article-detail/{id}', [KabarController::class, 'detailArtikel']);
Route::get('inspirasi', [KabarController::class, 'Inspirasi']);
Route::get('inspirasi-detail/{id}', [KabarController::class, 'detailInspirasi']);
Route::post('/bayar-zakat', [BerandaController::class, 'terimaBayarZakat']);
Route::post('/hubungi-kami', [MessageController::class, 'sendMessage']);

// Backend
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'storeLogin']);
Route::middleware('auth')->group(function () {
    Route::middleware('is.admin')->group(function () {
        Route::post('data-zis-ajax/', [AjaxController::class, 'getDataZisCategory']);
        Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {
            Route::get('logout', [AuthController::class, 'logout'])->name('logout');
            Route::get('/', [HomeController::class, 'index']);
            Route::get('berita', [AdmKabarController::class, 'indexBerita'])->name('index.berita');
            Route::get('berita/add', [AdmKabarController::class, 'createBerita'])->name('add.berita');
            Route::post('berita/store', [AdmKabarController::class, 'storeBerita'])->name('store.berita');
            Route::get('berita/edit/{beritaID}', [AdmKabarController::class, 'editBerita']);
            Route::post('berita/update/{beritaID}', [AdmKabarController::class, 'updateBerita']);
            Route::get('berita/delete/{beritaID}', [AdmKabarController::class, 'destroyBerita']);
            Route::get('berita/status/{beritaID}', [AdmKabarController::class, 'statusBerita']);

            Route::get('artikel', [AdmKabarController::class, 'indexArtikel'])->name('index.artikel');
            Route::get('artikel/add', [AdmKabarController::class, 'createArtikel'])->name('add.artikel');
            Route::post('artikel/store', [AdmKabarController::class, 'storeArtikel'])->name('store.artikel');
            Route::get('artikel/edit/{artikelID}', [AdmKabarController::class, 'editArtikel']);
            Route::post('artikel/update/{artikelID}', [AdmKabarController::class, 'updateArtikel']);
            Route::get('artikel/delete/{artikelID}', [AdmKabarController::class, 'destroyArtikel']);
            Route::get('artikel/status/{artikelID}', [AdmKabarController::class, 'statusArtikel']);

            Route::get('inspirasi', [AdmKabarController::class, 'indexInspirasi'])->name('index.inspirasi');
            Route::get('inspirasi/add', [AdmKabarController::class, 'createInspirasi'])->name('add.inspirasi');
            Route::post('inspirasi/store', [AdmKabarController::class, 'storeInspirasi'])->name('store.inspirasi');
            Route::get('inspirasi/edit/{inspirasiID}', [AdmKabarController::class, 'editInspirasi']);
            Route::post('inspirasi/update/{inspirasiID}', [AdmKabarController::class, 'updateInspirasi']);
            Route::get('inspirasi/delete/{inspirasiID}', [AdmKabarController::class, 'destroyInspirasi']);
            Route::get('inspirasi/status/{inspirasiID}', [AdmKabarController::class, 'statusInspirasi']);

            Route::get('kabarzakat', [AdmKabarController::class, 'indexKabarZakat'])->name('index.kabarzakat');
            Route::get('kabarzakat/add', [AdmKabarController::class, 'createKabarZakat'])->name('add.kabarzakat');
            Route::post('kabarzakat/store', [AdmKabarController::class, 'storeKabarZakat'])->name('store.kabarzakat');
            Route::get('kabarzakat/edit/{kabarzakatID}', [AdmKabarController::class, 'editKabarZakat']);
            Route::post('kabarzakat/update/{kabarzakatID}', [AdmKabarController::class, 'updateKabarZakat']);
            Route::get('kabarzakat/delete/{kabarzakatID}', [AdmKabarController::class, 'destroyKabarZakat']);
            Route::get('kabarzakat/status/{kabarzakatID}', [AdmKabarController::class, 'statusKabarZakat']);

            Route::get('galeri', [AdmKabarController::class, 'indexGaleri'])->name('index.galeri');
            Route::get('galeri/add', [AdmKabarController::class, 'createGaleri'])->name('add.galeri');
            Route::post('galeri/store', [AdmKabarController::class, 'storeGaleri'])->name('store.galeri');
            Route::get('galeri/edit/{galeriID}', [AdmKabarController::class, 'editGaleri']);
            Route::post('galeri/update/{galeriID}', [AdmKabarController::class, 'updateGaleri']);
            Route::get('galeri/delete/{galeriID}', [AdmKabarController::class, 'destroyGaleri']);

            Route::get('dana-tersalurkan/', [BerandaController::class, 'editDanaTersalurkan']);
            Route::post('dana-tersalurkan/', [BerandaController::class, 'storeDanaTersalurkan']);

            Route::get('laporan-zis/', [BerandaController::class, 'indexLaporanZis']);
            Route::get('data-zis/edit/{id}', [BerandaController::class, 'editLaporanZis']);
            Route::post('data-zis/edit/{id}', [BerandaController::class, 'updateLaporanZis']);
            Route::get('data-zis/delete/{id}', [BerandaController::class, 'deleteLaporanZis']);

            Route::get('/layanan/rekening', [LayananController::class, 'indexLayananRekening']);
            Route::get('/layanan/rekening/add', [LayananController::class, 'addRekening']);
            Route::post('/layanan/rekening', [LayananController::class, 'storeRekening']);
            Route::get('/layanan/rekening/{rekID}/edit', [LayananController::class, 'editRekening']);
            Route::post('/layanan/rekening/{rekID}/edit', [LayananController::class, 'updateRekening']);
            Route::get('/layanan/rekening/{rekID}/delete', [LayananController::class, 'deleteRekening']);

            Route::get('/layanan/pembayaran', [LayananController::class, 'indexBayarZakat']);
            Route::get('/layanan/pembayaran/{transID}/status', [LayananController::class, 'updateStatusBayar']);
        });
    });
});