@auth
    <li><a href="{{ route('index') }}">Home</a></li>
    <li><a href="{{ route('all') }}">Show all</a></li>
    <li><a href="{{ route('create') }}">Create</a></li>
@else 
	<li><a href="{{ route('index') }}">Home</a></li>
@endauth
