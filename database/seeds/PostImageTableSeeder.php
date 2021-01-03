<?php

use App\Post;
use App\PostImage;
use Illuminate\Database\Seeder;

class PostImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostImage::truncate();

        $posts = Post::all();

        foreach ($posts as $post) {
            PostImage::create([
                    'post_id' => $post->id ,
                    'image' => "5fec1df30ff5f.jpg",
            ]);
            
        }
    }
}
