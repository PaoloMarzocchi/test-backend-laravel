<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $post = new Post();
            $post->title = $faker->sentence(2, false);
            $post->subtitle = $faker->sentence(3, false);
            $post->text = $faker->paragraph();
            $post->creation_date = $faker->date();
            $post->main_category = $faker->word();
            $post->save();
        }
    }
}
