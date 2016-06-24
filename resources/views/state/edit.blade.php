@extends('layouts.form')
@section('content')
<form action="{{ url('/state/'.$state->id) }}" method="post" class="form-horizontal">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label class="col-md-12">State label</label>
		<div class="col-md-12">
			<input type="text" name="label" class="form-control" value="{{ $state->label }}">
		</div>
	</div>
	@include('state.color')
	<div class="form-group">
		<div class="col-md-12">
			<button type="submit" class="btn btn-primary">Update</button>
		</div>
	</div>
</form>
@endsection
