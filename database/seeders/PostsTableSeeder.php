<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'First Post',
                'content' => 'This is the content of the first post by user 1.',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Post',
                'content' => 'This is the second post, written by user 1.',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Third Post',
                'content' => 'User 2 shares their third post content here.',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fourth Post',
                'content' => 'This is the fourth post, authored by user 2.',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fifth Post',
                'content' => 'User 3 writes their fifth post with unique content.',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sixth Post',
                'content' => 'This is the sixth post, contributed by user 3.',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('posts')->insert($posts);
    }
}
