@extends('layouts.form')
@section('content')
<form action="{{ url('/bed/'.$bed->id) }}" method="POST" class="form-lg">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label>床型標籤</label>
		<input type="text" name="label" class="form-control" value="{{ $bed->label }}">
	</div>
	<button type="submit" class="btn btn-primary btn-lg">更新</button>
</form>
@endsection
