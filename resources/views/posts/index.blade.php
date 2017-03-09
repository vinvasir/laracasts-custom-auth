@extends ('layout')

@section ('content')
		<ul>
		@foreach ($posts as $post)
				<li><a href="/posts/{{$post->id}}">{{ $post->title }}</a></li>
		@endforeach
		</ul>
@endsection