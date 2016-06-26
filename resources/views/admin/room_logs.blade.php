@extends('layouts.form')

@section('content')
<table class="table">
	<thead>
		<tr>
			<td>User name</td>
			<td>Room number</td>
			<td>State</td>
			<td>Time</td>
		</tr>
	</thead>
	<tbody>
		@foreach($room_logs as $room_log)
		<tr>
			<td>{{ $room_log->user->name }}</td>
			<td>{{ $room_log->room->number }}</td>
			<td>{{ $room_log->state->label }}</td>
			<td>{{ $room_log->created_at }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection
