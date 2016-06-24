@extends('layouts.app')

@section('content')
	<div class="col-md-12">
		<form action="{{ url('room/'.$room->id) }}" method="post" class="form">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<label>room number : {{ $room->number }}</label>
			</div>
			<div class="form-group">
				<label>room status</label>
				@foreach ($states as $state)
				<div class="radio">
					<label>
						<input type="radio" name="state_id" value="{{ $state->id }}"{{ $room->state->id == $state->id ? ' checked' : '' }}>
						{{ $state->label }}
					</label>
				</div>
				@endforeach
			</div>
			<button type="submit" class="btn btn-primary">Update</button>
		</form>
	</div>
@endsection
