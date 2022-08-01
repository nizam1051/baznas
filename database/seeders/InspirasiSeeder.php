<?php

namespace Database\Seeders;

use App\Models\Inspirasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InspirasiSeeder extends Seeder
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
                'judul' => 'Koe kok iso geh iku pie tan',
                'deskripsi' => 'Gaopo tan, ayu iku pilihan',
                'gambar' => 'uploads/inspirasi/nathan.jpeg',
            ],
            [
                'judul' => 'Gak ngono a cel hehehehehe?',
                'deskripsi' => 'Gaopo cel, ayu iku pilihan',
                'gambar' => 'uploads/inspirasi/mikel.jpeg',
            ],
            [
                'judul' => 'Gaopo dik, ayu iku pilihan',
                'deskripsi' => 'Gaopo dik, ayu iku pilihan',
                'gambar' => 'uploads/inspirasi/diki.png',
            ],
        ])->each(function($inspirasi){
            Inspirasi::create($inspirasi);
        });
    }
}
