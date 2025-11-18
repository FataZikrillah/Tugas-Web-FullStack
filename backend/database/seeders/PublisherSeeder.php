<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('publishers')->insert([
            ['name' => 'Gramedia'],
            ['name' => 'Mizan'],
            ['name' => 'Bentang Pustaka'],
            ['name' => 'Salina Aja'],
            ['name' => 'Republika'],
            ['name' => 'Penerbit Buku Kompas'],
            ['name' => 'Elex Media Komputindo'],
            ['name' => 'Kepustakaan Populer Gramedia'],
            ['name' => 'Penerbit Haru'],
            ['name' => 'Alma Mater'],
        ]);
    }
}
