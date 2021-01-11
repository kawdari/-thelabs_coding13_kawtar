<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TexteCaroussel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('texte_caroussels')->insert(
            [
                [
                    'text'=>"Get your freebie template now!",          
                ],
            ],
        );
    }
}
