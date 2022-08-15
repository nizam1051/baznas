<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
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
                'name' => 'Admin',
                'email' => 'admin@test.test',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Ilham',
                'email' => 'ilham.dev69@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Nanang',
                'email' => 'nanang.my@staff.uns.ac.id',
                'password' => Hash::make('password'),
            ],
        ])->each(function ($users) {
            $user = User::firstOrcreate($users);
            $user->assignRole('admin');
        });
    }
}
