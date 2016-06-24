@extends('layouts.app')

@section('content')
	<div class="col-md-12">
		<form action="{{ url('room') }}" method="post" class="form">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<label>room number</label>
				<input type="text" name="number" class="form-control">
			</div>
			<div class="form-group">
				<label>room status</label>
				@foreach ($states as $state)
				<div class="radio">
					<label>
						<input type="radio" name="state_id" value="{{ $state->id }}">
						{{ $state->label }}
					</label>
				</div>
				@endforeach
			</div>
			<button type="submit" class="btn btn-primary">Create</button>
		</form>
	</div>
@endsection
