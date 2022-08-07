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
            'kategori' => 1,
            'price' => 10000000,
        ],
        [
            'kategori' => 2,
            'price' => 2000000,
        ],
        [
            'kategori' => 3,
            'price' => 2100000,
        ],
        [
            'kategori' => 4,
            'price' => 4000000,
        ],
        [
            'kategori' => 2,
            'price' => 2000000,
        ],
        ])->each(function($data){
            DataZis::create($data);
        });
    }
}
