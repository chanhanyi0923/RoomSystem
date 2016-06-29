@extends('layouts.form')

@section('content')
<form action="{{ url('bed') }}" method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label>bed label</label>
		<input type="text" name="label" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection
