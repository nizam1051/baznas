<?php

namespace App\Http\Controllers\Admin;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Galeri;

class AdmKabarController extends Controller
{
    public function indexBerita()
    {
        $berita = Berita::latest()->paginate(10);
        return view('admin.kabar.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createBerita()
    {
        return view('admin.kabar.add');
    }

    public function storeBerita(Request $request)
    {
        $validated = $request->validate(
            [
                'judul' => 'required|unique:berita',
                'deskripsi' => 'required',
                'gambar' => 'required|mimes:jpg,jpeg,png',
            ]

        );

        $gambar = $request->file('gambar');
        $name_gen = hexdec(uniqid()) . '.' . $gambar->getClientOriginalExtension();
        // Image::make($gambar)->resize(500, 300)->save('images/wilayah/' . $name_gen);

        $gambar->move(public_path('uploads/berita'), $name_gen);
        $last_img = 'uploads/berita/' . $name_gen;

        Berita::insert([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $last_img,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('index.berita')->with('success', 'Berita Sukses Ditambahkan');
    }


    public function editBerita($beritaID)
    {
        $berita = Berita::find($beritaID);
        // return $berita;
        return view('admin.kabar.edit', compact('berita'));
    }

    public function updateBerita(Request $request, $beritaID)
    {
        $berita = Berita::find($beritaID);

        $old_image = $request->old_image;
        $berita_image = $request->file('gambar');

        if ($berita_image) {

            $name_gen = hexdec(uniqid()) . '.' . $berita_image->getClientOriginalExtension();
            $berita_image->move(public_path('uploads/berita'), $name_gen);
            $last_img = 'uploads/berita/' . $name_gen;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            $berita->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'gambar' => $last_img,
            ]);

            return redirect()->back()->with('success', 'Berita Updated Successfully');
        } else {
            $berita->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ]);

            return redirect()->back()->with('success', 'Berita Updated Successfully');
        }
    }
    public function destroyBerita($beritaID)
    {
        $berita = Berita::find($beritaID);
        if (file_exists($berita->gambar)) {
            unlink($berita->gambar);
            Berita::find($beritaID)->delete();
            return redirect()->back()->with('success', 'Berita Delete Successfully');
        } else {
            Berita::find($beritaID)->delete();
            return redirect()->back()->with('success', 'Berita Delete Successfully');
        }
    }

    public function indexGaleri()
    {
        $galeri = Galeri::latest()->paginate(10);

        // foreach ($galeri as $g) {
        //     foreach (explode('|', $g->gambar) as $image) {
        //         return $image;
        //     }
        // }

        return view('admin.galeri.index', compact('galeri'));
    }
    public function createGaleri()
    {
        return view('admin.galeri.add');
    }
    public function storeGaleri(Request $request)
    {
        $validated = $request->validate(
            [
                'judul' => 'required|unique:galeri',
                'gambar' => 'required',
            ]

        );

        $gambar = $request->file('gambar');

        foreach ($gambar as $multi_gambar) {
            $name_gen = hexdec(uniqid()) . '.' . $multi_gambar->getClientOriginalExtension();
            // Image::make($gambar)->resize(500, 300)->save('images/wilayah/' . $name_gen);

            $multi_gambar->move(public_path('uploads/galeri'), $name_gen);
            $last_img[] = 'uploads/galeri/' . $name_gen;
        }
        Galeri::insert([
            'judul' => $request->judul,
            'gambar' => implode("|", $last_img),
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('index.galeri')->with('success', 'Galeri Sukses Ditambahkan');
    }

    public function editGaleri($galeriID)
    {
        $galeri = Galeri::find($galeriID);
        // return $berita;
        return view('admin.galeri.edit', compact('galeri'));
    }
    public function updateGaleri(Request $request, $galeriID)
    {
        $galeri = Galeri::find($galeriID);

        $old_image = $request->old_image;
        $galeri_image = $request->file('gambar');

        if ($galeri_image) {

            $name_gen = hexdec(uniqid()) . '.' . $galeri_image->getClientOriginalExtension();
            $galeri_image->move(public_path('uploads/galeri'), $name_gen);
            $last_img = 'uploads/galeri/' . $name_gen;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            $galeri->update([
                'judul' => $request->judul,
                'gambar' => $last_img,
            ]);

            return redirect()->back()->with('success', 'Galeri Updated Successfully');
        } else {
            $galeri->update([
                'judul' => $request->judul,
            ]);

            return redirect()->back()->with('success', 'Galeri Updated Successfully');
        }
    }

    public function destroyGaleri($galeriID)
    {
        $galeri = Galeri::find($galeriID);
        if (file_exists($galeri->gambar)) {
            unlink($galeri->gambar);
            Galeri::find($galeriID)->delete();
            return redirect()->back()->with('success', 'Berita Delete Successfully');
        } else {
            Galeri::find($galeriID)->delete();
            return redirect()->back()->with('success', 'Berita Delete Successfully');
        }
    }
}
