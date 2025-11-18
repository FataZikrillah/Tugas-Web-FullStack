<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('authors')->insert([
            ['name' => 'Tere Liye'],
            ['name' => 'Andrea Hirata'],
            ['name' => 'Eka Kurniawan'],
            ['name' => 'Habiburrahman El Shirazy'],
            ['name' => 'Dewi Lestari'],
            ['name' => 'Ahmad Fuadi'],
            ['name' => 'Laila S. Chudori'],
            ['name' => 'Raditya Dika'],
            ['name' => 'Mia Arsjad'],
            ['name' => 'Fahd Pahdepie'],
        ]);
    }
}
