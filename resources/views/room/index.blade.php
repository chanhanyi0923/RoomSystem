@extends('layouts.main')

@section('title')
RoomStates
@endsection

@section('content')
@can('admin')
<a href="{{ url('room/create') }}" class="btn btn-success">Create</a>
<hr>
@endcan
<div class="row">
	@foreach ($rooms as $room)
	<div class="col-md-2">
		<div class="panel panel-{{
			array('default', 'primary', 'success', 'info', 'warning', 'danger')[ $room->state['color'] ]
		}}">
			<div class="panel-heading">
				<h3 class="panel-title">房號 : {{ $room->number }}</h3>
			</div>
			<div class="panel-body">
				<h2>{{ $room->state->label }}</h2>
				@if(Auth::check())
				<hr>
				<p>
					<h4>操作 : </h4>
					<a href="{{ url('room/'.$room->id.'/edit') }}" class="btn btn-info">edit</a>
					@can('admin')
					<form action="{{ url('room/'.$room->id) }}" method="post" style="display:inline;">
						<input type="hidden" name="_method" value="DELETE">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button type="submit" class="btn btn-danger">delete</button>
					</form>
					@endcan
				</p>
				@endif
			</div>
		</div>
	</div>
	@endforeach
</div>
@endsection
