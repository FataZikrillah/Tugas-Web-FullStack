<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('members')->insert([
            [
                'name' => 'Ali',
                'email' => 'ali@mail.com',
                'phone' => '081234567'
            ],
            [
                'name' => 'Budi',
                'email' => 'budi@mail.com',
                'phone' => '081987654'
            ],
            [
                'name' => 'Cici',
                'email' => 'cici@mail.com',
                'phone' => '081111222'
            ],
            [
                'name' => 'Dedi',
                'email' => 'dedi@mail.com',
                'phone' => '081222333'
            ],
            [
                'name' => 'Eka',
                'email' => 'eka@mail.com',
                'phone' => '081333444'
            ],
            [
                'name' => 'Fajar',
                'email' => 'fajar@mail.com',
                'phone' => '081444555'
            ],
            [
                'name' => 'Gina',
                'email' => 'gina@mail.com',
                'phone' => '081555666'
            ],
            [
                'name' => 'Hadi',
                'email' => 'hadi@mail.com',
                'phone' => '081666777'
            ],
            [
                'name' => 'Indah',
                'email' => 'indah@mail.com',
                'phone' => '081777888'
            ],
            [
                'name' => 'Joko',
                'email' => 'joko@mail.com',
                'phone' => '081888999'
            ],
        ]);
    }
}
