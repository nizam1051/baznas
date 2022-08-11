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
                'judul' => 'Ini adalah judul tapi masih pake kata dummy',
                'deskripsi' => 'Ini adalah deskripsi tapi masih pake kata dummy dan ini nanti bisa di edit oleh administrator di halaman admin',
                'gambar' => 'assets/img/infaq.jpg',
            ],
            // [
            //     'judul' => 'Gaopo dik, ayu iku pilihan',
            //     'deskripsi' => 'Gaopo dik, ayu iku pilihan',
            //     'gambar' => 'uploads/artikel/diki.png',
            // ],
            // [
            //     'judul' => 'Koe kok iso geh iku pie tan',
            //     'deskripsi' => 'Gaopo tan, ayu iku pilihan',
            //     'gambar' => 'uploads/artikel/nathan.jpeg',
            // ],
        ])->each(function($artikel){
            for($i=0 ; $i<3 ; $i++)
            {
                Artikel::create($artikel);
            }
        });
    }
}
