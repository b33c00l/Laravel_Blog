<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Post;
use App\Comment;
use App\Http\Requests\EditPostRequest;

class PostsController extends Controller
{
    public function index()
    { 
        return view('index');
    }

    public function edit($id)
    {   
        $edit = Post::where('id', $id)->get();

        return view('posts.edit', ['edit' => $edit]);
    }

    public function update($id, EditPostRequest $request)
    {   

        $post = Post::where('id', $id)->first();

        $post->title = $request->title;
        $post->content = $request->content;
        $post->date = Carbon::today();

        $post->save();

        return redirect()->route('index');
    }




    public function all()
    {
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

        $posts = Post::orderBy('id', 'desc')->paginate(15);

        return view('posts.all',[
            'posts' => $posts

        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function single($id)
    {   
        $singlepost = Post::where('id', $id)->get();
        $singlecomment = Comment::where('post_id', $id)->orderBy('id', 'desc')->paginate(5);

        return view('posts.single', [
            'singlepost' => $singlepost,
            'singlecomment' => $singlecomment
        ]);
    }

    public function destroy($id)
    {   
        $deletecomment = Comment::where('post_id', $id)->delete();
        $deletepost = Post::where('id', $id)->delete();


        return redirect()->route('all');
    }


}
