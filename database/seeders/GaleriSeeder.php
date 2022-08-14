<?php

namespace Database\Seeders;

use App\Models\Galeri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'judul' => 'Infaq',
                'gambar' => 'assets/img/infaq.jpg',
            ],
            [
                'judul' => 'Zakat',
                'gambar' => 'assets/img/zakat.jpg',
            ],
            [
                'judul' => 'Baznas',
                'gambar' => 'assets/img/baznas.jpeg',
            ],
            [
                'judul' => 'Gibran',
                'gambar' => 'assets/img/gibran.jpg',
            ],
            // [
            //     'judul' => 'Gaopo dik, ayu iku pilihan',
            //     'gambar' => 'uploads/galeri/diki.png',
            // ],
            // [
            //     'judul' => 'Koe kok iso geh iku pie tan',
            //     'gambar' => 'uploads/galeri/nathan.jpeg',
            // ],
            // [
            //     'judul' => 'Gah gah gah',
            //     'gambar' => 'uploads/galeri/ridwan.jpg',
            // ],
        ])->each(function ($galeri) {
            // for ($i = 0; $i < 4; $i++) {
            //     Galeri::create($galeri);
            // }
            Galeri::create($galeri);
        });
    }
}
