<?php

use App\Article;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $newArticle = new Article();
            $newArticle -> title = $faker->sentence(4);
            $newArticle -> body = $faker->text(200);
            $newArticle -> slug = Str::slug($newArticle -> title);
            $newArticle -> save();
        }
    }    
}