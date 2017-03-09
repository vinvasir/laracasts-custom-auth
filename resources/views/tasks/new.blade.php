@extends ('layout')

@section ('content')

<form method="post" action="/tasks">
		{{ csrf_field() }}

		<label for="body">Body</label>

		<textarea id="body" name="body" required></textarea>

		<button type="submit">Submit</button>
</form>
@endsection