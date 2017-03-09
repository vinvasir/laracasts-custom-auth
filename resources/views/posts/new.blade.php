@extends ('layout')

@section ('content')

<form method="post" action="/posts">
		{{ csrf_field() }}

		<label for="title">Title</label>

		<input type="text" id="title" name="title">

		<label for="body">Body</label>

		<textarea id="body" name="body"></textarea>

		<button type="submit">Submit</button>
</form>

@include('partials.errors')

@endsection