@extends('layouts.main')

@section('content')
<a href="{{ url('/bed/create') }}" class="btn btn-success">Create</a>
<hr>
<table class="table">
	<thead>
		<tr>
			<td>bed label</td>
			<td>operate</td>
		</tr>
	</thead>
	<tbody>
		@foreach($beds as $bed)
		<tr>
			<td>{{ $bed->label }}</td>
			<td>
				<a href="{{ url('/bed/'.$bed->id.'/edit') }}" class="btn btn-info">Edit</a>
				<form action="{{ url('/bed/'.$bed->id) }}" method="post" style="display:inline;">
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
