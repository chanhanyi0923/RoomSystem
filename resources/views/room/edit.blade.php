@extends('layouts.form')

@section('title')
變更狀態
@endsection

@section('content')
<form action="{{ url('room/'.$room->id) }}" method="post" class="form-lg">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label>房號 : {{ $room->number }}</label>
	</div>
	@include('room.input')
	<button type="submit" class="btn btn-primary btn-lg">變更</button>
</form>
@endsection
