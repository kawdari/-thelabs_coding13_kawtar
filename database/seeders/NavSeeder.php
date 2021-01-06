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
            'logo' => 'img/logo.png',
            'linkOne1' => 'Home',
            'linkTwo2' => 'Services',
            'linkTree3' => 'Blog',
            'linkFour4' => 'Contact'
        ]);
    }
}
