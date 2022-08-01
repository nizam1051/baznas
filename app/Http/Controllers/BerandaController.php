<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Inspirasi;
use App\Models\KabarZakat;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $kabar = KabarZakat::latest()->take(3)->get();
        $artikel = Artikel::latest()->take(3)->get();
        $inspirasi = Inspirasi::latest()->take(3)->get();
        $distKabar = KabarZakat::latest()->first();
        $distArtikel = Artikel::latest()->first();
        $distInspirasi = Inspirasi::latest()->first();
        return view('index',compact('kabar','artikel','inspirasi','distArtikel','distKabar','distInspirasi'));
    }

    public function legalitas()
    {
        return view('tentang-kami.legalitas');
    }

    public function visiMisi()
    {
        return view('tentang-kami.visi-misi');
    }

    public function strukturOrganisasi()
    {
        return view('tentang-kami.struktur-organisasi');
    }

    public function organisasi()
    {
        return view('tentang-kami.organisasi');
    }

    public function sejarahOrganisasi()
    {
        return view('tentang-kami.sejarah-organisasi');
    }

    public function zakat()
    {
        return view('bayar.zakat');
    }

    public function inspirasi()
    {
        return view('kabar.inspirasi');
    }

    public function article()
    {
        return view('kabar.article');
    }

    public function pendistribusian()
    {
        return view('kabar.pendistribusian');
    }

    public function videoKegiatan()
    {
        return view('kabar.video-kegiatan');
    }

    public function hubungiKami()
    {
        return view('hubungi-kami');
    }

    public function notFound()
    {
        return view('404');
    }

    public function rekeningZakat()
    {
        return view('layanan.rekening-zakat');
    }

    public function rekeningInfak()
    {
        return view('layanan.rekening-infak');
    }

    public function rekeningSedekah()
    {
        return view('layanan.rekening-sedekah');
    }

    public function rekeningFidyah()
    {
        return view('layanan.rekening-fidyah');
    }

    public function rekeningPembayaran()
    {
        return view('layanan.layanan-pembayaran');
    }

    public function programKKN()
    {
        return view('program.program-kkn');
    }

    public function programBeasiswa()
    {
        return view('program.program-beasiswa');
    }

    public function programDistribusi()
    {
        return view('program.program-distribusi');
    }

    public function programPemberdayaan()
    {
        return view('program.program-permberdayaan');
    }

    public function programSantunan()
    {
        return view('program.program-santunan');
    }

    public function programSubsidi()
    {
        return view('program.program-subsidi');
    }

    public function indexFitrah()
    {
        return view('index-fitrah');
    }

    public function indexMaal()
    {
        return view('index-maal');
    }

    public function indexFidyah()
    {
        return view('index-fidyah');
    }

    public function indexQurban()
    {
        return view('index-qurban');
    }

    public function indexInfaq()
    {
        return view('index-infaq');
    }
}
