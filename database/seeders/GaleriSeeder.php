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
                'judul' => 'Gak ngono a cel hehehehehe?',
                'gambar' => 'uploads/galeri/mikel.jpeg',
            ],
            [
                'judul' => 'Gaopo dik, ayu iku pilihan',
                'gambar' => 'uploads/galeri/diki.png',
            ],
            [
                'judul' => 'Koe kok iso geh iku pie tan',
                'gambar' => 'uploads/galeri/nathan.jpeg',
            ],
            [
                'judul' => 'Gah gah gah',
                'gambar' => 'uploads/galeri/ridwan.jpg',
            ],
        ])->each(function($galeri){
            Galeri::create($galeri);
        });
    }
}
