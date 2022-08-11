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
                'judul' => 'Ini adalah judul tapi masih pake kata dummy',
                'deskripsi' => 'Ini adalah deskripsi tapi masih pake kata dummy dan ini nanti bisa di edit oleh administrator di halaman admin',
                'gambar' => 'assets/img/infaq.jpg',
            ],
            // [
            //     'judul' => 'Koe kok iso geh iku pie tan',
            //     'deskripsi' => 'Gaopo tan, ayu iku pilihan',
            //     'gambar' => 'uploads/kabarzakat/nathan.jpeg',
            // ],
            // [
            //     'judul' => 'Gak ngono a cel hehehehehe?',
            //     'deskripsi' => 'Gaopo cel, ayu iku pilihan',
            //     'gambar' => 'uploads/kabarzakat/mikel.jpeg',
            // ],
        ])->each(function($kabar){
            for($i=0 ; $i<3 ; $i++)
            {
                KabarZakat::create($kabar);
            }
        });
    }
}
