@extends('layouts.app',[
'title' => 'All'	
])
@section('content')
<div class="col-md-2"></div>
	<div class="col-md-8">
		<table width="100%">
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Date</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>	
			@foreach ($posts as $post)
				@if($loop->iteration %2 == 1)
					<tr style="border:1px solid black; background-color: rgb(123,123,412);">
						<td><b>{{$post->id}}</b></td>
						<td><b>{{$post->title}}</b></td>
						<td><b>{{$post->date}}</b></td>
						<td>
							<a style="margin: 5px" class="btn btn-primary" href="{{ route('edit', $post->id)}}">Edit</a>
						</td>
						<td>
							<a style="margin: 5px" class="btn btn-danger" href="{{ route('destroy', $post->id)}}">Delete</a>
						</td>
					</tr>
				@else 
					<tr>
						<td>{{$post->id}}</td>
						<td>{{$post->title}}</td>
						<td>{{$post->date}}</td>
						<td>
							<a style="margin: 5px" class="btn btn-primary" href="{{ route('edit', $post->id)}}">Edit</a>
						</td>
						<td>
							<a style="margin: 5px" class="btn btn-danger" href="{{ route('destroy', $post->id)}}">Delete</a>
						</td>
					</tr>

			@endif
			@endforeach
		</table>
		<div class="text-center">{!!$posts->links()!!}</div>
	</div>
<div class="col-md-2"></div>
@endsection