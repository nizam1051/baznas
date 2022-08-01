<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('index');
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
}
