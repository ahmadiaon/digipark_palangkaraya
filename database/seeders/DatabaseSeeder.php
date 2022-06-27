<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\CommunityCategory;
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
        // \App\Models\User::factory(10)->create();
        $this->call([
            CommunityCategorySeeder::class,
            BusinessCategorySeeder::class,
            UserSeeder::class,
            GallerySeeder::class,
            BusinessSeeder::class,
            NewsSeeder::class,
            TourSeeder::class,
            SlideSeeder::class,
            FinancialServicesSeeder::class,
        ]);
    }
}
