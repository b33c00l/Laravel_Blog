<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
        

    	$faker = Faker\Factory::create();

    	$count = 100;
    	for ($i=0; $i < $count ; $i++) { 
            $chuckas = file_get_contents('https://api.chucknorris.io/jokes/random');
            $chuck[] = json_decode($chuckas,true);  
    		 DB::table('posts')->insert([
    		'title' => $faker->company,
    		'content' => $chuck[$i]['value'],
    		'date' => $faker->date($format = 'Y-m-d', $max = 'now')
    	]);    
    	}

    }
}


        // $posts = [];
        // for ($i=0; $i < 10 ; $i++) { 
        //     $chuckas = file_get_contents('https://api.chucknorris.io/jokes/random');
        //     $chuck[] = json_decode($chuckas,true);

        //     $date = Carbon::createFromFormat('Y-m-d', '2018-02-06');

        //     $post = new \stdClass();
        //     $post->title = $chuck[$i]['id'];
        //     $post->content  = $chuck[$i]['value'];
        //     $post->date = $date;
            
        //     $posts[] = $post;
        // }