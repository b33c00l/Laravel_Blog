<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

use App\Http\Requests\StoreCommentRequest;

use Carbon\Carbon;

class CommentsController extends Controller
{
    public function create()
    {
        return view('comments.create');
    }

    public function store($id, StoreCommentRequest $request)
    {
    	//Option one

    	// $comment = new Comment;

    	// $comment->name = $request->name;
    	// $comment->content = $request->content;
    	// $comment->date = Carbon::today();
    	// $comment->post_id = $id;

    	// $comment->save();


    	//Option two
    	Comment::create($request->except('_token') + [
    		'date' => Carbon::now(),
    		'post_id' => $id
    	]);

    	
        return redirect()->route('single', [
            'id' => $id
        ]);
    }

    public function show()
    {
        return view('comments/show');
    }

    public function destroy($id)
    {	
    	$comment = Comment::findOrFail($id);
    	$post_id = $comment->post_id;
    	$deletecomment = Comment::where('id', $id)->delete();

        return redirect()->route('single', [
            'post_id' => $post_id
        ]);
    }
}



 