<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slides = [
            [
                'uuid' => 'ini-uuid-slide-seeder-1',
                'gallery_uuid' => 'ini-uuid-gallery-slide-1',
                'admin_uuid' => 'ini-uuid-admin-seeder-1',
                'title' => 'Slide Seeder 1',
                'status' => 1,
            ],
            [
                'uuid' => 'ini-uuid-slide-seeder-2',
                'gallery_uuid' => 'ini-uuid-gallery-slide-2',
                'admin_uuid' => 'ini-uuid-admin-seeder-1',
                'title' => 'Slide Seeder 2',
                'status' => 1,
            ],
            [
                'uuid' => 'ini-uuid-slide-seeder-3',
                'gallery_uuid' => 'ini-uuid-gallery-slide-3',
                'admin_uuid' => 'ini-uuid-admin-seeder-1',
                'title' => 'Slide Seeder 3',
                'status' => 1,
            ],
        ];

        DB::table('slides')->insert($slides);
    }
}
