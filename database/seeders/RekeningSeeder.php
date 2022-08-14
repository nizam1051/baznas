<?php

namespace Database\Seeders;

use App\Models\Rekening;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RekeningSeeder extends Seeder
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
                'image' => 'assets/img/bj.png',
                'no_rek' => '5023036655',
            ],
            [
                'image' => 'assets/img/bsi.png',
                'no_rek' => '158158587',
            ],
        ])->each(function ($rek) {
            Rekening::create($rek);
        });
    }
}
