<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Seeder;

class NavSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navs')->insert([
           /*  'logo' => 'img/logo.png', */
            'nav1' => 'Home',
            'nav2' => 'Services',
            'nav3' => 'Blog',
            'nav4' => 'Contact'
        ]);
    }
}
