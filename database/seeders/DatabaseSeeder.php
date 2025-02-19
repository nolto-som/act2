<?php

namespace Database\Seeders;

use App\Models\Students;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        Students::create([
            'name' => 'User',
            'age' => 25,
            'gender' => 'Female',
            'address' => 'fwkuafw',
        ]);

        Students::create([
            'name' => 'User2',
            'age' => 20,
            'gender' => 'female',
            'address' => 'hgfwAK',
        ]);

        Students::create([
            'name' => 'User3',
            'age' => 27,
            'gender' => 'female',
            'address' => 'yfwL<VG',
        ]);
    }
}