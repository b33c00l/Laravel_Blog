<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Post;

class HomeController extends Controller
{
    public function index()
    { 	

    	//Traukimas info is API
   		// $posts = [];
    	// for ($i=0; $i < 10 ; $i++) { 
    	// 	$chuckas = file_get_contents('https://api.chucknorris.io/jokes/random');
    	// 	$chuck[] = json_decode($chuckas,true);

    	// 	$date = Carbon::createFromFormat('Y-m-d', '2018-02-06');

    	// 	$post = new \stdClass();
    	// 	$post->title = $chuck[$i]['id'];
    	// 	$post->content  = $chuck[$i]['value'];
    	// 	$post->date = $date;

    	// 	$posts[] = $post;
    	// }

    	//prideti nauja irasa
    	// $post = new Post();
    	// $post->title = 'Naujas postas';
    	// $post->content = 'Naujas naujas naujas postas';
    	// $post->date = '2018-03-01';
    	// $post->save();

        //grazina 100 irasa
        // $posts = Post::where('id',100)->get();

        //grazina irasus tarp 100 ir 110
        // $posts = Post::where('id', '>', 100)
        // ->where('id', '<', 110)
        // ->orderBy('id', 'ASC')
        // ->get();


    	$posts = Post::orderBy('id', 'desc')->paginate(15);

        return view('index',[
            'posts' => $posts

        ]);
    }
}


