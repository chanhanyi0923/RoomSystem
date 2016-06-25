@extends('layouts.main')

@section('content')
<a href="{{ url('/state/create') }}" class="btn btn-success">Create</a>
<hr>
<table class="table">
	<thead>
		<tr>
			<td>state label</td>
			<td>state color</td>
			<td>operate</td>
		</tr>
	</thead>
	<tbody>
		@foreach($states as $state)
		<tr>
			<td>{{ $state->label }}</td>
			<td>{{ $state->color }}</td>
			<td>
				<a href="{{ url('/state/'.$state->id.'/edit') }}" class="btn btn-info">Edit</a>
				<form action="{{ url('/state/'.$state->id) }}" method="post" style="display:inline;">
					<input type="hidden" name="_method" value="DELETE">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<button class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection
