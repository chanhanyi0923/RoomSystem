@extends('layouts.form')

@section('title')
新增狀態
@endsection

@section('content')
<form action="{{ url('/state') }}" method="POST" class="form-horizontal form-lg">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label class="col-md-12">狀態標籤</label>
		<div class="col-md-12">
			<input type="text" name="label" class="form-control">
		</div>
	</div>
	@include('state.color')
	<div class="form-group">
		<div class="col-md-12">
			<button type="submit" class="btn btn-primary btn-lg">新增</button>
		</div>
	</div>
</form>
@endsection
