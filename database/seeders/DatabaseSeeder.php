<?php

namespace Database\Seeders;

use App\Models\TeamTitle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
			NavSeeder::class,
			RoleSeeder::class,
            UserSeeder::class,
            TexteCaroussel::class,
            CarousselSeeder::class,
            PresentationSeeder::class,
            VideoSeeder::class,
            TeamTitleSeeder::class,
            TeamSeeder::class,
            TestiSeeder::class,
		]);    }
}
