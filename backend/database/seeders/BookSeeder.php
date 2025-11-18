<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('books')->insert([
            [
                'title' => 'Bumi',
                'author_id' => 1,
                'publisher_id' => 1
            ],
            [
                'title' => 'Laskar Pelangi',
                'author_id' => 2,
                'publisher_id' => 2
            ],
            [
                'title' => 'Cantik Itu Luka',
                'author_id' => 3,
                'publisher_id' => 3
            ],
            [
                'title' => 'Ayat-Ayat Cinta',
                'author_id' => 4,
                'publisher_id' => 4
            ],
            [
                'title' => 'Supernova',
                'author_id' => 5,
                'publisher_id' => 5
            ],
            [
                'title' => 'Negeri 5 Menara',
                'author_id' => 6,
                'publisher_id' => 6
            ],
            [
                'title' => 'Pulang',
                'author_id' => 7,
                'publisher_id' => 7
            ],
            [
                'title' => 'Marmut Merah Jambu',
                'author_id' => 8,
                'publisher_id' => 8
            ],
            [
                'title' => 'Hujan',
                'author_id' => 1,
                'publisher_id' => 1
            ],
            [
                'title' => 'Rembulan Tenggelam di Wajahmu',
                'author_id' => 10,
                'publisher_id' => 10
            ],
        ]);
    }
}
