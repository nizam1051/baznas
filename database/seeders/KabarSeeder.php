<?php

namespace Database\Seeders;

use App\Models\KabarZakat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KabarSeeder extends Seeder
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
                'judul' => 'Gaopo dik, ayu iku pilihan',
                'deskripsi' => 'Gaopo dik, ayu iku pilihan',
                'gambar' => 'uploads/kabarzakat/diki.png',
            ],
            [
                'judul' => 'Koe kok iso geh iku pie tan',
                'deskripsi' => 'Gaopo tan, ayu iku pilihan',
                'gambar' => 'uploads/kabarzakat/nathan.jpeg',
            ],
            [
                'judul' => 'Gak ngono a cel hehehehehe?',
                'deskripsi' => 'Gaopo cel, ayu iku pilihan',
                'gambar' => 'uploads/kabarzakat/mikel.jpeg',
            ],
        ])->each(function($kabar){
            KabarZakat::create($kabar);
        });
    }
}
