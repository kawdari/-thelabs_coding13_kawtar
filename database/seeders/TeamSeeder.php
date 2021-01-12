<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert(
            [
                [
                    'image'=>"3.jpg",
                    'name'=>"Kawtar Dari",
                    'function'=>"CEO",
                ],
                [
                    'image'=>"2.jpg",
                    'name'=>"Driss",
                    'function'=>"Marketing",
                ],
                [
                    'image'=>"1.jpg",
                    'name'=>"Spow",
                    'function'=>"Comptabilité",
                ],
            ],
        );
     
    }
}
