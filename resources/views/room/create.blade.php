@extends('layouts.form')

@section('title')
新增房間
@endsection

@section('content')
<form action="{{ url('room') }}" method="post" class="form-lg">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label>房號</label>
		<input type="text" name="number" class="form-control">
	</div>
	@include('room.input')
	<button type="submit" class="btn btn-primary btn-lg">新增</button>
</form>
@endsection
