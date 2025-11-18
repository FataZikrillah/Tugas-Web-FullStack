<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('loans')->insert([
            [
                'member_id' => 1,
                'book_id' => 1,
                'loan_date' => now(),
                'return_date' => null
            ],
            [
                'member_id' => 2,
                'book_id' => 2,
                'loan_date' => now(),
                'return_date' => null
            ],
            [
                'member_id' => 3,
                'book_id' => 3,
                'loan_date' => now(),
                'return_date' => null
            ],
            [
                'member_id' => 4,
                'book_id' => 4,
                'loan_date' => now(),
                'return_date' => null
            ],
            [
                'member_id' => 5,
                'book_id' => 5,
                'loan_date' => now(),
                'return_date' => null
            ],
            [
                'member_id' => 6,
                'book_id' => 6,
                'loan_date' => now(),
                'return_date' => null
            ],
            [
                'member_id' => 7,
                'book_id' => 7,
                'loan_date' => now(),
                'return_date' => null
            ],
            [
                'member_id' => 8,
                'book_id' => 8,
                'loan_date' => now(),
                'return_date' => null
            ],
            [
                'member_id' => 9,
                'book_id' => 9,
                'loan_date' => now(),
                'return_date' => null
            ],
            [
                'member_id' => 10,
                'book_id' => 10,
                'loan_date' => now(),
                'return_date' => null
            ],
        ]);
    }
}
