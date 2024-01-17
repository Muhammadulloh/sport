<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Post::create([
            'user_id' => 1,
            'title' => 'title misol',
            'short_content' => 'short_content misol',
            'content' => 'content misol',
        ]);
    }
}
