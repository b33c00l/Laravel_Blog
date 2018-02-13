<?php

use Illuminate\Database\Seeder;
use App\Post;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $posts = Post::all();

        foreach ($posts as $post) {
          $trumpas = file_get_contents('https://api.tronalddump.io/random/quote');
          $trump = json_decode($trumpas,true);  
      		DB::table('comments')->insert([
      		'name' => $faker->name,
      		'content' => $trump['value'],
      		'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
      		'post_id' => $post->id
    	]);    
    	}
  	 }
}


