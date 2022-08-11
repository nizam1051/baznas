<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Artikel;
use App\Models\CategoryData;
use App\Models\DataZis;
use App\Models\Inspirasi;
use App\Models\KabarZakat;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $galeri = Galeri::latest()->take(4)->get();
        $penyalur = DB::table('penyaluran')->latest('id')->first();
        $fitrah = DataZis::where('kategori', 1)->sum('price');
        $infaq = DataZis::where('kategori', 2)->sum('price');
        $sedekah = DataZis::where('kategori', 3)->sum('price');
        $fidyah = DataZis::where('kategori', 4)->sum('price');
        return view('index',compact('kabar','artikel','inspirasi','distArtikel','distKabar','distInspirasi','galeri', 'penyalur', 'fitrah', 'infaq', 'sedekah', 'fidyah'));
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

    public function layananPembayaran()
    {
        return view('layanan.layanan-pembayaran');
    }

    // public function indexFitrah()
    // {
    //     $kabar = KabarZakat::latest()->take(3)->get();
    //     $artikel = Artikel::latest()->take(3)->get();
    //     $inspirasi = Inspirasi::latest()->take(3)->get();
    //     $distKabar = KabarZakat::latest()->first();
    //     $distArtikel = Artikel::latest()->first();
    //     $distInspirasi = Inspirasi::latest()->first();
    //     $galeri = Galeri::latest()->take(4)->get();
    //     return view('index-fitrah',compact('kabar','artikel','inspirasi','distArtikel','distKabar','distInspirasi','galeri'));
    // }

    // public function indexMaal()
    // {
    //     $kabar = KabarZakat::latest()->take(3)->get();
    //     $artikel = Artikel::latest()->take(3)->get();
    //     $inspirasi = Inspirasi::latest()->take(3)->get();
    //     $distKabar = KabarZakat::latest()->first();
    //     $distArtikel = Artikel::latest()->first();
    //     $distInspirasi = Inspirasi::latest()->first();
    //     $galeri = Galeri::latest()->take(4)->get();
    //     return view('index-maal',compact('kabar','artikel','inspirasi','distArtikel','distKabar','distInspirasi','galeri'));
    // }

    // public function indexFidyah()
    // {
    //     $kabar = KabarZakat::latest()->take(3)->get();
    //     $artikel = Artikel::latest()->take(3)->get();
    //     $inspirasi = Inspirasi::latest()->take(3)->get();
    //     $distKabar = KabarZakat::latest()->first();
    //     $distArtikel = Artikel::latest()->first();
    //     $distInspirasi = Inspirasi::latest()->first();
    //     $galeri = Galeri::latest()->take(4)->get();
    //     return view('index-fidyah',compact('kabar','artikel','inspirasi','distArtikel','distKabar','distInspirasi','galeri'));
    // }

    // public function indexQurban()
    // {
    //     $kabar = KabarZakat::latest()->take(3)->get();
    //     $artikel = Artikel::latest()->take(3)->get();
    //     $inspirasi = Inspirasi::latest()->take(3)->get();
    //     $distKabar = KabarZakat::latest()->first();
    //     $distArtikel = Artikel::latest()->first();
    //     $distInspirasi = Inspirasi::latest()->first();
    //     $galeri = Galeri::latest()->take(4)->get();
    //     return view('index-qurban',compact('kabar','artikel','inspirasi','distArtikel','distKabar','distInspirasi','galeri'));
    // }

    // public function indexInfaq()
    // {
    //     $kabar = KabarZakat::latest()->take(3)->get();
    //     $artikel = Artikel::latest()->take(3)->get();
    //     $inspirasi = Inspirasi::latest()->take(3)->get();
    //     $distKabar = KabarZakat::latest()->first();
    //     $distArtikel = Artikel::latest()->first();
    //     $distInspirasi = Inspirasi::latest()->first();
    //     $galeri = Galeri::latest()->take(4)->get();
    //     return view('index-infaq',compact('kabar','artikel','inspirasi','distArtikel','distKabar','distInspirasi','galeri'));
    // }

    public function editDanaTersalurkan(){
        $data = DB::table('penyaluran')->latest('updated_at')->first();
        return view('index.data-penyaluran',compact('data'));
    }

    public function storeDanaTersalurkan(Request $request){
        $validated = $request->validate(
            [
                'penerima' => 'required|min:0|numeric',
                'penghimpun' => 'required|min:0|numeric',
                'dana_tersalurkan' => 'required|min:0|numeric',
                'donatur' => 'required|min:0|numeric',
            ]
        );

        if(!$validated){
            return redirect()->back()->withErrors($validated)->withInput();
        }

        DB::table('penyaluran')->updateOrInsert(
            [
                'penerima' => $request->penerima,
                'penghimpun' => $request->penghimpun,
                'dana_tersalurkan' => $request->dana_tersalurkan,
                'donatur' => $request->donatur,
                'updated_at' => Carbon::now(),
            ]
        );

        return redirect()->back()->with('success', 'Penyaluran Sukses Di Update');
    }

    public function indexLaporanZis(){
        $data = DataZis::all();
        $category = CategoryData::all();
        return view('index.laporan-zis',compact('data', 'category'));
    }

    public function editLaporanZis($id){
        $data = DataZis::find($id);
        $category = CategoryData::all();
        return view('index.edit-laporan-zis',compact('data', 'category'));
    }

    public function updateLaporanZis($id, Request $request){
        $validated = $request->validate(
            [
                'kategori' => 'required|numeric',
                'price' => 'required|min:0|numeric',
            ]
        );

        if(!$validated){
            return redirect()->back()->withErrors($validated)->withInput();
        }

        DataZis::find($id)->update([
            'kategori' => $request->kategori,
            'price' => $request->price,
        ]);

        return redirect()->back()->with('success', 'Laporan Zis Sukses Di Update');
    }

    public function deleteLaporanZis($id){
        DataZis::find($id)->delete();
        return redirect()->back()->with('success', 'Laporan Zis Sukses Di Hapus');
    }
}
