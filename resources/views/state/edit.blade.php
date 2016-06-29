@extends('layouts.form')
@section('content')
<form action="{{ url('/state/'.$state->id) }}" method="POST" class="form-horizontal form-lg">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label class="col-md-12">狀態標籤</label>
		<div class="col-md-12">
			<input type="text" name="label" class="form-control" value="{{ $state->label }}">
		</div>
	</div>
	@include('state.color')
	<div class="form-group">
		<div class="col-md-12">
			<button type="submit" class="btn btn-primary btn-lg">更新</button>
		</div>
	</div>
</form>
@endsection
