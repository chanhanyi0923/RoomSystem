@extends('layouts.main')

@section('title')
房間狀態
@endsection

@section('style')
@media (min-width: 992px) {
    .col-md-1-8 {
		width: 12.5% !important;
    }
}
.text-lg {
	font-size:large;
}
@endsection

@section('content')
@can('admin')
<a href="{{ url('room/create') }}" class="btn btn-success">新增房間</a>
<hr>
@endcan
<div class="row">
	@foreach ($rooms as $room)
	<div class="col-md-1 col-md-1-8">
		<div class="panel panel-{{
			array('default', 'primary', 'success', 'info', 'warning', 'danger')[ $room->state['color'] ]
		}}">
			<div class="panel-heading">
				<h3 class="panel-title text-lg">房號 : {{ $room->number }}</h3>
			</div>
			<div class="panel-body">
				<h3>
                    {{ $room->state->label }}
                </h3>
                <h4>
                    {{ $room->bed->label }}
                </h4>
				@if(Auth::check())
				<hr>
				<a href="{{ url('room/'.$room->id.'/edit') }}" class="btn btn-info">變更狀態</a>
				@can('admin')
				<form action="{{ url('room/'.$room->id) }}" method="post" style="display:inline;">
					<input type="hidden" name="_method" value="DELETE">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<button type="submit" class="btn btn-danger">刪除房間</button>
				</form>
				@endcan
				@endif
			</div>
		</div>
	</div>
	@endforeach
</div>
@endsection
