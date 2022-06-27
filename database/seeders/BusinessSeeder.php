<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $businesses = [
            [
                'uuid' => 'ini-uuid-business-seeder-1',
                'business_category_uuid' => 'ini-uuid-business-category-seeder-1',
                'name' => 'Business Seeder 1',
                'description' => 'Business Seeder 1',
                'address' => 'Business Seeder 1',
                'image_path' => 'ini-uuid-gallery-seeder-1, ini-uuid-gallery-seeder-2',
            ],
            [
                'uuid' => 'ini-uuid-business-seeder-2',
                'business_category_uuid' => 'ini-uuid-business-category-seeder-2',
                'name' => 'Business Seeder 2',
                'description' => 'Business Seeder 2',
                'address' => 'Business Seeder 2',
                'image_path' => 'ini-uuid-gallery-seeder-3, ini-uuid-gallery-seeder-4',
            ],
            [
                'uuid' => 'ini-uuid-business-seeder-3',
                'business_category_uuid' => 'ini-uuid-business-category-seeder-3',
                'name' => 'Business Seeder 3',
                'description' => 'Business Seeder 3',
                'address' => 'Business Seeder 3',
                'image_path' => 'ini-uuid-gallery-seeder-1, ini-uuid-gallery-seeder-2',
            ],
            [
                'uuid' => 'ini-uuid-business-seeder-4',
                'business_category_uuid' => 'ini-uuid-business-category-seeder-4',
                'name' => 'Business Seeder 4',
                'description' => 'Business Seeder 4',
                'address' => 'Business Seeder 4',
                'image_path' => 'ini-uuid-gallery-seeder-3, ini-uuid-gallery-seeder-4',
            ],
        ];

        DB::table('businesses')->insert($businesses);
    }
}
