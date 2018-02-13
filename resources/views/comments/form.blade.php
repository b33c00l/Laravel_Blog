<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<form method="POST" action= "{{ route('comments/store', $post->id)}}">
			{!! csrf_field() !!}
				<label>Name:</label>
				<input class="form-control" type="text" name="name">
				<label>Content:</label>
				<textarea class="form-control" rows="10" name="content"> </textarea>
				<button class='btn btn-success btn-lg btn-block' style="margin-top: 30px">Submit</button>
		</form>
	</div>
</div>
