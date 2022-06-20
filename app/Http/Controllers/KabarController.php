<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Inspirasi;
use App\Models\KabarZakat;
use Illuminate\Http\Request;

class KabarController extends Controller
{
    public function KabarZakat()
    {
        $kabar_zakat = KabarZakat::latest()->paginate(6);
        return view('kabar.kabar-zakat', compact('kabar_zakat'));
    }

    public function Artikel()
    {
        $artikel = Artikel::latest()->paginate(6);
        return view('kabar.article', compact('artikel'));
    }
    public function Inspirasi()
    {
        $inspirasi = Inspirasi::latest()->paginate(6);
        return view('kabar.inspirasi', compact('inspirasi'));
    }
    public function Galeri()
    {
        $galeri = Galeri::latest()->paginate(6);
        return view('galeri', compact('galeri'));
    }
}
