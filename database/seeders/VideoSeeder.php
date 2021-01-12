<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert(
            [
                [
                    'image'=>"video.jpg",
                    'url'=>"https://www.youtube.com/watch?v=S-OaZiTzq5U&ab_channel=MyHondaTV",
                ],
            ],
        );
    }
}
