<?php

namespace Database\Seeders;

use App\Models\DataZis;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataZisSeeder extends Seeder
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
            'kategori' => 'fitrah',
            'price' => 10000000,
        ],
        [
            'kategori' => 'infaq',
            'price' => 2000000,
        ],
        [
            'kategori' => 'sedekah',
            'price' => 2100000,
        ],
        [
            'kategori' => 'fidyah',
            'price' => 4000000,
        ],
        [
            'kategori' => 'infaq',
            'price' => 2000000,
        ],
        ])->each(function($data){
            DataZis::create($data);
        });
    }
}
