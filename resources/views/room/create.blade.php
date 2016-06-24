@extends('layouts.form')

@section('content')
<form action="{{ url('room') }}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label>room number</label>
		<input type="text" name="number" class="form-control">
	</div>
	@include('room.states_input')
	<button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection
