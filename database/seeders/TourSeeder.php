<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tours = [
            [
                'uuid' => 'ini-uuid-tour-seeder-1',
                'name' => 'Tour Seeder 1',
                'address' => 'Tour Seeder 1',
                // 'city' => 'Tour Seeder 1',
                // 'province' => 'Tour Seeder 1',
                // 'description' => 'Tour Seeder 1',
                // 'image_path' => 'ini-uuid-gallery-seeder-1, ini-uuid-gallery-seeder-2',
                // 'location' => 'Tour Seeder 1',
                // 'facebook' => 'Tour Seeder 1',
                // 'instagram' => 'Tour Seeder 1',
                // 'youtube' => 'Tour Seeder 1',
                // 'status' => 1,
            ],
            [
                'uuid' => 'ini-uuid-tour-seeder-2',
                'name' => 'Tour Seeder 2',
                'address' => 'Tour Seeder 2',
                // 'city' => 'Tour Seeder 2',
                // 'province' => 'Tour Seeder 2',
                // 'description' => 'Tour Seeder 2',
                // 'image_path' => 'ini-uuid-gallery-seeder-3, ini-uuid-gallery-seeder-4',
                // 'location' => 'Tour Seeder 2',
                // 'facebook' => 'Tour Seeder 2',
                // 'instagram' => 'Tour Seeder 2',
                // 'youtube' => 'Tour Seeder 2',
                // 'status' => 1,
            ],
            [
                'uuid' => 'ini-uuid-tour-seeder-3',
                'name' => 'Tour Seeder 3',
                'address' => 'Tour Seeder 3',
                // 'city' => 'Tour Seeder 3',
                // 'province' => 'Tour Seeder 3',
                // 'description' => 'Tour Seeder 3',
                // 'image_path' => 'ini-uuid-gallery-seeder-1, ini-uuid-gallery-seeder-2',
                // 'location' => 'Tour Seeder 3',
                // 'facebook' => 'Tour Seeder 3',
                // 'instagram' => 'Tour Seeder 3',
                // 'youtube' => 'Tour Seeder 3',
                // 'status' => 1,
            ],
            // [
            //     'uuid' => 'ini-uuid-tour-seeder-2',
            //     'name' => 'Tour Seeder 2',
            //     'address' => 'Tour Seeder 2',
            //     'city' => 'Tour Seeder 2',
            //     'province' => 'Tour Seeder 2',
            //     'description' => 'Tour Seeder 2',
            //     'image_path' => 'ini-uuid-gallery-seeder-3, ini-uuid-gallery-seeder-4',
            //     'location' => 'Tour Seeder 2',
            //     'facebook' => 'Tour Seeder 2',
            //     'instagram' => 'Tour Seeder 2',
            //     'youtube' => 'Tour Seeder 2',
            //     'status' => 1,
            // ],
            // [
            //     'uuid' => 'ini-uuid-tour-seeder-3',
            //     'name' => 'Tour Seeder 3',
            //     'address' => 'Tour Seeder 3',
            //     'city' => 'Tour Seeder 3',
            //     'province' => 'Tour Seeder 3',
            //     'description' => 'Tour Seeder 3',
            //     'image_path' => 'ini-uuid-gallery-seeder-1, ini-uuid-gallery-seeder-2',
            //     'location' => 'Tour Seeder 3',
            //     'facebook' => 'Tour Seeder 3',
            //     'instagram' => 'Tour Seeder 3',
            //     'youtube' => 'Tour Seeder 3',
            //     'status' => 1,
            // ],
            // [
            //     'uuid' => 'ini-uuid-tour-seeder-4',
            //     'name' => 'Tour Seeder 4',
            //     'address' => 'Tour Seeder 4',
            //     'city' => 'Tour Seeder 4',
            //     'province' => 'Tour Seeder 4',
            //     'description' => 'Tour Seeder 4',
            //     'image_path' => 'ini-uuid-gallery-seeder-3, ini-uuid-gallery-seeder-4',
            //     'location' => 'Tour Seeder 4',
            //     'facebook' => 'Tour Seeder 4',
            // ],
        ];

        DB::table('tours')->insert($tours);
    }
}
