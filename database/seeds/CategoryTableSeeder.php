<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        for ($i =1; $i<5; $i++) {
            Category::create([
                'title' => 'Categoria ' . $i,
                'url_clean' => 'url_categoria_' . $i,
            ]);
        }

    }
}
