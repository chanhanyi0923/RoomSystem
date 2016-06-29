@extends('layouts.form')

@section('content')
<form action="{{ url('bed') }}" method="POST" class="form-lg">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label>床型標籤</label>
		<input type="text" name="label" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary btn-lg">新增</button>
</form>
@endsection
