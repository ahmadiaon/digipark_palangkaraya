<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $business_categories = [
            [
                'uuid' => 'ini-uuid-business-category-seeder-1',
                'category' => 'Digital',
                'order_number' => 1,
                'status' => 1,
                'gallery_uuid' => 'ini-uuid-gallery-seeder-1',
            ],
            [
                'uuid' => 'ini-uuid-business-category-seeder-2',
                'category' => 'Food & Beverage',
                'order_number' => 2,
                'status' => 1,
                'gallery_uuid' => 'ini-uuid-gallery-seeder-1',
            ],
            [
                'uuid' => 'ini-uuid-business-category-seeder-3',
                'category' => 'Lifestyle',
                'order_number' => 3,
                'status' => 1,
                'gallery_uuid' => 'ini-uuid-gallery-seeder-1',
            ],
            [
                'uuid' => 'ini-uuid-business-category-seeder-4',
                'category' => 'Culture & Art',
                'order_number' => 4,
                'status' => 1,
                'gallery_uuid' => 'ini-uuid-gallery-seeder-1',
            ],
        ];

        DB::table('business_categories')->insert($business_categories);
    }
}
