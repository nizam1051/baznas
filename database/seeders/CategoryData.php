<?php

namespace Database\Seeders;

use App\Models\CategoryData as Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryData extends Seeder
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
                'id' => 1,
                'name' => 'fitrah',
                'display' => 'Fitrah',
            ],
            [
                'id' => 2,
                'name' => 'infaq',
                'display' => 'Infaq',
            ],
            [
                'id' => 3,
                'name' => 'sedekah',
                'display' => 'Sedekah',
            ],
            [
                'id' => 4,
                'name' => 'fidyah',
                'display' => 'Fidyah',
            ],
        ])->each(function ($data) {
            Category::create($data);
        });
    }
}
