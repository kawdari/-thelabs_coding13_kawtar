<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert(
            [
                [
                    'title' => "Main ",
                    'place' => "place Catalunya 2D Barcelona",
                    'phone' => "0032 489 326 081",
                    'mail' => "dari-kawtar@hotmail.com",
                ],
            ],
        );
    }
}
