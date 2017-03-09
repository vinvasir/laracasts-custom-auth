@extends ('layout')

@section ('content')
		<h3>{{ $post->title }}</h3>
		<p>{{ $post->body  }}</p>

		<hr>

		<ul>
			@foreach($post->comments as $comment)
				<li>{{ $comment->body }}  </li>
			@endforeach
		</ul>

		<div class="card">
			<div class="card-block">
				<form action="/comments" method="post">
				{{ csrf_field() }}

					<input type="hidden" name="post_id" value="{{ $post->id }}">

					<div class="form-group">
						<label for="body">Body:</label>
						<textarea id="body" name="body" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Add Comment</button>
					</div>
				</form>
			</div>
		</div>

		@include('partials.errors')
		
@endsection