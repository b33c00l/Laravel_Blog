@extends('layouts.app',[
	'title' => 'Single'	
])
@section('content')
		<div class="col-md-8 col-md-offset-2">
			@foreach ($singlepost as $post)
				@if ($loop->first == true)
					<h2 style="font-size: 50px">{{$post->title}}</h2>
					<p style="font-size: 20px">{{$post->content}}</p>
					<p style="font-size: 15px">{{$post->date}}</p>
					<a style="margin-bottom: 30px" class="btn btn-primary" href="{{ route('index') }}">Back</a>
				@endif
			@endforeach

			@foreach ($singlecomment as $comment)
				<i>
					<h3>{{$comment->name}}</h3>
					<p>{{$comment->content}}</p>
					<p>{{$comment->date}}</p>
				</i>
			@auth
			<a class="btn btn-danger" href="{{ route('comments/destroy', $comment->id)}}">Delete</a>
			@else
			@endauth
			@endforeach
			<div class="text-center">{!!$singlecomment->links()!!}</div>
			@include('comments.form')
		</div>

@endsection