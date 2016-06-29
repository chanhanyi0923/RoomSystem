@extends('layouts.main')

@section('title')
狀態列表
@endsection

@section('content')
<a href="{{ url('/state/create') }}" class="btn btn-success">新增狀態</a>
<hr>
<table class="table">
	<thead>
		<tr>
			<th>狀態標籤</th>
			<th>狀態顏色</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		@foreach($states as $state)
		<tr>
			<td>{{ $state->label }}</td>
			<td>
				<span class="text-{{['muted', 'primary', 'success', 'info', 'warning', 'danger'][$state->color]}}" style="font-size:24px;">
					<span class="glyphicon glyphicon-text-background" aria-hidden="true"></span>
				</span>
			</td>
			<td>
				<a href="{{ url('/state/'.$state->id.'/edit') }}" class="btn btn-info">編輯狀態</a>
				<form action="{{ url('/state/'.$state->id) }}" method="post" style="display:inline;">
					<input type="hidden" name="_method" value="DELETE">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<button class="btn btn-danger">刪除狀態</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection
