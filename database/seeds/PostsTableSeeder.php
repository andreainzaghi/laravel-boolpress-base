<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i <10; $i++){
            $newPost = new Post();
            $newPost -> title =$faker->sentence();
            $newPost -> date =$faker->date();
            $newPost -> content =$faker->text();
            $newPost -> image =$faker->imageUrl(360, 360, 'animals', true, 'dogs', true);
            $newPost -> slug =Str::slug($newPost -> title,'-');
            $newPost -> published = rand(0,1);
            $newPost ->save();
            
        }
    }
}
