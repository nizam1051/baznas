<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use Illuminate\Http\Request;

class KabarController extends Controller
{
    public function Berita()
    {
        $berita = Berita::latest()->paginate(6);
        return view('kabar.berita', compact('berita'));
    }
    public function Galeri()
    {
        $galeri = Galeri::latest()->paginate(6);
        return view('galeri', compact('galeri'));
    }
}
