@extends('layouts.app')

@section('title')
RoomStates
@endsection

@section('content')
@can('admin')
<a href="{{ url('room/create') }}" class="btn btn-default">new</a>
@endcan
<div class="row">
	@foreach ($rooms as $room)
	<div class="col-md-2">
		<div class="panel panel-{{
			array('default', 'primary', 'success', 'info', 'warning', 'danger')[ $room->state['color'] ]
		}}">
			<div class="panel-heading">
				<h3 class="panel-title">{{ $room->id }} -> RoomNumber {{ $room->number }}</h3>
			</div>
			<div class="panel-body">
				label = {{ $room->state->label }}<br>
				color = {{ $room->state->color }}
				<a href="{{ url('room/'.$room->id.'/edit') }}" class="btn btn-success">edit</a>
				@can('admin')
				<form action="{{ url('room/'.$room->id) }}" method="post" style="display:inline;">
					<input type="hidden" name="_method" value="DELETE">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<button type="submit" class="btn btn-danger">delete</button>
				</form>
				@endcan
			</div>
		</div>
	</div>
	@endforeach
</div>
@endsection
