<div class="row">
	<div class="col-md-8 col-md-offset-2">

		{!! Form::open(['route' => 'posts.store']) !!}
		    {{Form::label('title', 'Title:')}}
		    {{Form::text('title', null, ['class' => 'form-control'])}}

		    {{Form::label('content', 'Content:')}}
		    {{Form::textarea('content', null, ['class'=> 'form-control'])}}

		    {{Form::submit('Submit', ['class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px;' ])}}
		{!! Form::close() !!}
	</div>
</div>