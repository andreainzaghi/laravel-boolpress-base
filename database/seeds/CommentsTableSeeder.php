<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comment;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       $posts = Post::where('published', 1)->get();
       
       foreach ($posts as  $post) {
           for($i =0 ;$i< rand(0,3) ; $i++)
       }
    }
}
