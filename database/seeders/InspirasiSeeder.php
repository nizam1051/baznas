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
                'judul' => 'Ini adalah judul tapi masih pake kata dummy',
                'deskripsi' => 'Ini adalah deskripsi tapi masih pake kata dummy dan ini nanti bisa di edit oleh administrator di halaman admin',
                'gambar' => 'assets/img/infaq.jpg',
            ],
        ])->each(function($inspirasi){
            for($i=0 ; $i<3 ; $i++)
            {
                Inspirasi::create($inspirasi);
            }
        });
    }
}
