@extends('layouts.form')
@section('content')
<form action="{{ url('/bed/'.$bed->id) }}" method="POST">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label>bed label</label>
		<input type="text" name="label" class="form-control" value="{{ $bed->label }}">
	</div>
	<button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
