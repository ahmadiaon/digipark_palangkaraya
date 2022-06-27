<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $galleries = [

            //* Slide
            [
                'uuid' => 'ini-uuid-gallery-slide-1',
                'name' => 'Gallery Slide 1',
                'is_url' => 0,
                'url' => '',
                'path' => '/gallery/slide1.jpg',
                'mime_type' => 'png',

            ],
            [
                'uuid' => 'ini-uuid-gallery-slide-2',
                'name' => 'Gallery Slide 2',
                'is_url' => 0,
                'url' => '',
                'path' => '/gallery/slide2.jpg',
                'mime_type' => 'png',

            ],
            [
                'uuid' => 'ini-uuid-gallery-slide-3',
                'name' => 'Gallery Slide 3',
                'is_url' => 0,
                'url' => '',
                'path' => '/gallery/slide3.jpg',
                'mime_type' => 'png',

            ],

            //* Financial Services
            [
                'uuid' => 'ini-uuid-gallery-bank-1',
                'name' => 'Gallery Bank 1',
                'is_url' => 0,
                'url' => '',
                'path' => '/gallery/bank1.png',
                'mime_type' => 'png',
            ],
            [
                'uuid' => 'ini-uuid-gallery-bank-2',
                'name' => 'Gallery Bank 2',
                'is_url' => 0,
                'url' => '',
                'path' => '/gallery/bank2.png',
                'mime_type' => 'png',
            ],
            [
                'uuid' => 'ini-uuid-gallery-bank-3',
                'name' => 'Gallery Bank 3',
                'is_url' => 0,
                'url' => '',
                'path' => '/gallery/bank3.png',
                'mime_type' => 'png',
            ],
            [
                'uuid' => 'ini-uuid-gallery-bank-4',
                'name' => 'Gallery Bank 4',
                'is_url' => 0,
                'url' => '',
                'path' => '/gallery/bank4.png',
                'mime_type' => 'png',
            ],
            [
                'uuid' => 'ini-uuid-gallery-bank-5',
                'name' => 'Gallery Bank 5',
                'is_url' => 0,
                'url' => '',
                'path' => '/gallery/bank5.png',
                'mime_type' => 'png',
            ],

            //* Community Logo
            [
                'uuid' => 'ini-uuid-gallery-community-logo-1',
                'name' => 'Gallery Community Logo 1',
                'is_url' => 0,
                'url' => '',
                'path' => '/gallery/community1.jpg',
                'mime_type' => 'jpg',
            ],
            [
                'uuid' => 'ini-uuid-gallery-community-logo-2',
                'name' => 'Gallery Community Logo 2',
                'is_url' => 0,
                'url' => '',
                'path' => '/gallery/community2.jpeg',
                'mime_type' => 'jpeg',
            ],
            [
                'uuid' => 'ini-uuid-gallery-community-logo-3',
                'name' => 'Gallery Community Logo 3',
                'is_url' => 0,
                'url' => '',
                'path' => '/gallery/community3.jpg',
                'mime_type' => 'jpg',
            ],
            [
                'uuid' => 'ini-uuid-gallery-community-logo-4',
                'name' => 'Gallery Community Logo 4',
                'is_url' => 0,
                'url' => '',
                'path' => '/gallery/community4.png',
                'mime_type' => 'png',
            ],


            //* test
            [
                'uuid' => 'ini-uuid-gallery-seeder-1',
                'name' => 'Gallery Seeder 1',
                'is_url' => 0,
                'url' => '',
                'path' => '/gallery/foto_fajri.png',
                'mime_type' => 'png',
            ],
            [
                'uuid' => 'ini-uuid-gallery-seeder-2',
                'name' => 'Gallery Seeder 2',
                'is_url' => 0,
                'url' => '',
                'path' => '/gallery/foto_fajri.png',
                'mime_type' => 'png',
            ],
            [
                'uuid' => 'ini-uuid-gallery-seeder-3',
                'name' => 'Gallery Seeder 3',
                'is_url' => 0,
                'url' => '',
                'path' => '/gallery/foto_fajri.png',
                'mime_type' => 'png',
            ],
            [
                'uuid' => 'ini-uuid-gallery-seeder-4',
                'name' => 'Gallery Seeder 4',
                'is_url' => 0,
                'url' => '',
                'path' => '/gallery/foto_fajri.png',
                'mime_type' => 'png',
            ],
        ];

        DB::table('galleries')->insert($galleries);
    }
}
