<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class PenyaluranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penyaluran')->insert([
            'penerima' => 0,
            'penghimpun' => 0,
            'dana_tersalurkan' => 0,
            'donatur' => 0
        ]);
    }
}
