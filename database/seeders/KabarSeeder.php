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
                'judul' => 'BAZNAS Solo Salurkan Zakat, Infak, dan Sedekah ke Ratusan Warga',
                'deskripsi' => 'IBadan Amil Zakat Nasional (BAZNAS) Kota Solo menyalurkan ZIS (Zakat, Infak dan Sedekah) kepada ratusan warga Solo di penghujung ramadan.',
                'gambar' => 'assets/img/infaq.jpg',
            ],
            [
                'judul' => 'Baznas Solo Pastikan Penyaluran Dana Transparan dan Tepat Sasaran',
                'deskripsi' => 'Badan Amil Zakat Nasional (Baznas) Kota Solo memastikan penyaluran dana, baik zakat maupun infak, secara transparan dan tepat sasaran. Sejauh ini, Baznas fokus mengelola zakat dan infak dari aparatur sipil negara (ASN).',
                'gambar' => 'assets/img/gibran.jpg',
            ],
            [
                'judul' => 'Baznas Solo Tetapkan Zakat Fitrah 2,7 Kg Per Orang, Begini Penjelasannya',
                'deskripsi' => 'Badan Amil Zakat Nasional (Baznas) Solo, Kantor Kementerian Agama (Kemenag) Solo, dan Pemkot Solo bersepakat menetapkan zakat fitrah sebesar 2,7 kg beras atau Rp 33 ribu per orang.',
                'gambar' => 'assets/img/zakat.jpg',
            ],
        ])->each(function ($kabar) {
            // for ($i = 0; $i < 3; $i++) {
            //     KabarZakat::create($kabar);
            // }
            KabarZakat::create($kabar);
        });
    }
}
