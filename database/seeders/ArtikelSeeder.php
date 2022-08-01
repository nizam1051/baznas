<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
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
                'deskripsi' => 'Gaopo cel, ayu iku pilihan',
                'gambar' => 'uploads/artikel/mikel.jpeg',
            ],
            [
                'judul' => 'Gaopo dik, ayu iku pilihan',
                'deskripsi' => 'Gaopo dik, ayu iku pilihan',
                'gambar' => 'uploads/artikel/diki.png',
            ],
            [
                'judul' => 'Koe kok iso geh iku pie tan',
                'deskripsi' => 'Gaopo tan, ayu iku pilihan',
                'gambar' => 'uploads/artikel/nathan.jpeg',
            ],
        ])->each(function($artikel){
            Artikel::create($artikel);
        });
    }
}
