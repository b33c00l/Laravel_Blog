@extends('layouts.app',[
'title' => 'Index'])	

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			@foreach ($posts as $post)
				@if ($loop->first == true)
				<div class="text-center">
					<h2 style="font-size: 35px">{{$post->title}}</h2>
					<img width="60%" src="http://why-ed.com/wp-content/uploads/2017/04/Chuck-Norris.jpg">
					<p style="font-size: 20px">{{$post->content}}</p>
					<p style="font-size: 15px">{{$post->date}}</p>
					<a style="margin-bottom: 30px" class="btn btn-primary" href="{{ route('single', $post->id) }}">Show More</a>
					@auth
					<a style="margin-bottom: 30px" class="btn btn-info" href="{{ route('edit', $post->id) }}">Edit</a>
					@else
					@endauth
				</div>
				<br>
				@elseif ($loop->iteration %2 == 0)
					<b>
						<h2>{{$post->title}}</h2>
						<p>{{$post->content}}</p>
						<p>{{$post->date}}</p>
						<a style="margin-bottom: 30px" class="btn btn-primary" href="{{ route('single', $post->id) }}">Show More</a>
						@auth
						<a style="margin-bottom: 30px" class="btn btn-info" href="{{ route('edit', $post->id) }}">Edit</a>
						@else
					@endauth
					</b>
				<br>
				@else
					<h2>{{$post->title}}</h2>
					<p>{{$post->content}}</p>
					<p>{{$post->date}}</p>
					<a style="margin-bottom: 30px" class="btn btn-primary" href="{{ route('single', $post->id) }}">Show More</a>
					@auth
					<a style="margin-bottom: 30px" class="btn btn-info" href="{{ route('edit', $post->id) }}">Edit</a>
					@else
					@endauth

				<br>
				@endif
			@endforeach
			<div class="col-md-2"></div>
		</div>
	</div>
</div>
<div class="text-center">{!!$posts->links()!!}</div>
@endsection



