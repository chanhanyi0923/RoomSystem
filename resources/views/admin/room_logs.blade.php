@extends('layouts.form')

@section('content')
<div class="btn-group">
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Users
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu">
		@foreach($users as $user)
		<li><a href="{{ url('/admin/user/'.$user->id) }}">{{ $user->name }}</a></li>
		@endforeach
	</ul>
</div>
<div class="btn-group">
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Rooms
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu">
		@foreach($rooms as $room)
		<li><a href="{{ url('/admin/room/'.$room->id) }}">{{ $room->number }}</a></li>
		@endforeach
	</ul>
</div>
<div class="btn-group">
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		States
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu">
		@foreach($states as $state)
		<li><a href="{{ url('/admin/state/'.$state->id) }}">{{ $state->label }}</a></li>
		@endforeach
	</ul>
</div>
<div class="btn-group">
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Beds
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu">
		@foreach($beds as $bed)
		<li><a href="{{ url('/admin/bed/'.$bed->id) }}">{{ $bed->label }}</a></li>
		@endforeach
	</ul>
</div>
<a class="btn btn-default" href="{{ url('/admin') }}">全部</a>

<hr>

<table class="table">
	<thead>
		<tr>
			<th>User name</th>
			<th>房號</th>
			<th>狀態</th>
			<th>床型</th>
			<th>時間</th>
		</tr>
	</thead>
	<tbody>
		@foreach($room_logs as $room_log)
		<tr>
			<td>{{ $room_log->user->name }}</td>
			<td>{{ $room_log->room->number }}</td>
			<td>{{ $room_log->state->label }}</td>
			<td>{{ $room_log->bed->label }}</td>
			<td>{{ $room_log->created_at }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection
