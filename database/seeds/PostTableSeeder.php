<?php

use App\Category;
use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        $categories = Category::all();

        foreach ($categories as $category) {
            for ($i =1; $i<5; $i++) {
                Post::create([
                    'title' => 'Post ' . $i . " - " . $category->id ,
                    'url_clean' => 'url_post_' . $i . " - " .$category->id,
                    'content' => 'Texto contenido ' . $i,
                    'posted' => 'yes',
                    'category_id' => $category->id
                ]);
            }
        }
    }
}
