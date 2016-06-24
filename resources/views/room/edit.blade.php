@extends('layouts.form')

@section('content')
<form action="{{ url('room/'.$room->id) }}" method="post">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label>room number : {{ $room->number }}</label>
	</div>
	@include('room.states_input')
	<button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
