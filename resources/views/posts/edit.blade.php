@extends('layouts.app',[
	'title' => 'Edit'	
])
@section('content')

@foreach ($edit as $e)

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<form method="POST" action= "{{ route('update', $e->id)}}">
			{!! csrf_field() !!}
			<label>Title:</label>
			<input class="form-control" type="text" name="title" value="{{$e->title}}">
			<label>Content:</label>
			<textarea class="form-control" rows="10" name="content">{{$e->content}}</textarea>
			<button class='btn btn-success btn-lg btn-block' style="margin-top: 30px">Update</button>
		</form>
	</div>
</div>

@endforeach

@endsection