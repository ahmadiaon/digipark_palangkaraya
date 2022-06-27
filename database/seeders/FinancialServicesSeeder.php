<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinancialServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $financial_services = [
            [
                'uuid' => 'ini-uuid-financial-services-seeder-1',
                'name' => 'Financial Services Seeder 1',
                'logo_path' => 'ini-uuid-gallery-seeder-1',
                'description' => 'Financial Services Seeder 1',
                'address' => 'Financial Services Seeder 1',
                'city' => 'Financial Services Seeder 1',
                'province' => 'Financial Services Seeder 1',
                'image_path' => '',
                'location' => 'Financial Services Seeder 1',
                'facebook' => 'Financial Services Seeder 1',
                'instagram' => 'Financial Services Seeder 1',
                'youtube' => 'Financial Services Seeder 1',
                'status' => 1,
            ],
            [
                'uuid' => 'ini-uuid-financial-services-seeder-2',
                'name' => 'Financial Services Seeder 2',
                'logo_path' => 'ini-uuid-gallery-seeder-1',
                'description' => 'Financial Services Seeder 2',
                'address' => 'Financial Services Seeder 2',
                'city' => 'Financial Services Seeder 2',
                'province' => 'Financial Services Seeder 2',
                'image_path' => '',
                'location' => 'Financial Services Seeder 2',
                'facebook' => 'Financial Services Seeder 2',
                'instagram' => 'Financial Services Seeder 2',
                'youtube' => 'Financial Services Seeder 2',
                'status' => 1,
            ],
            [
                'uuid' => 'ini-uuid-financial-services-seeder-3',
                'name' => 'Financial Services Seeder 3',
                'logo_path' => 'ini-uuid-gallery-seeder-1',
                'description' => 'Financial Services Seeder 3',
                'address' => 'Financial Services Seeder 3',
                'city' => 'Financial Services Seeder 3',
                'province' => 'Financial Services Seeder 3',
                'image_path' => '',
                'location' => 'Financial Services Seeder 3',
                'facebook' => 'Financial Services Seeder 3',
                'instagram' => 'Financial Services Seeder 3',
                'youtube' => 'Financial Services Seeder 3',
                'status' => 1,
            ],
        ];

        DB::table('financial_services')->insert($financial_services);
    }
}
