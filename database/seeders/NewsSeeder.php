<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = [
            [
                'uuid' => 'ini-uuid-news-seeder-1',
                'title' => 'News Seeder 1',
                'content' => 'News Seeder 1',
                'image_path' => 'ini-uuid-gallery-seeder-1, ini-uuid-gallery-seeder-2',
                'status' => 1,
            ],
            [
                'uuid' => 'ini-uuid-news-seeder-2',
                'title' => 'News Seeder 2',
                'content' => 'News Seeder 2',
                'image_path' => 'ini-uuid-gallery-seeder-3, ini-uuid-gallery-seeder-4',
                'status' => 1,
            ],
            [
                'uuid' => 'ini-uuid-news-seeder-3',
                'title' => 'News Seeder 3',
                'content' => 'News Seeder 3',
                'image_path' => 'ini-uuid-gallery-seeder-1, ini-uuid-gallery-seeder-2',
                'status' => 1,
            ],
            [
                'uuid' => 'ini-uuid-news-seeder-4',
                'title' => 'News Seeder 4',
                'content' => 'News Seeder 4',
                'image_path' => 'ini-uuid-gallery-seeder-3, ini-uuid-gallery-seeder-4',
                'status' => 1,
            ],
        ];

        DB::table('news')->insert($news);
    }
}
