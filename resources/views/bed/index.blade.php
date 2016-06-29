@extends('layouts.main')

@section('content')
<a href="{{ url('/bed/create') }}" class="btn btn-success">新增床型</a>
<hr>
<table class="table">
	<thead>
		<tr>
			<th>床型標籤</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		@foreach($beds as $bed)
		<tr>
			<td>{{ $bed->label }}</td>
			<td>
				<a href="{{ url('/bed/'.$bed->id.'/edit') }}" class="btn btn-info">編輯床型</a>
				<form action="{{ url('/bed/'.$bed->id) }}" method="post" style="display:inline;">
					<input type="hidden" name="_method" value="DELETE">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<button class="btn btn-danger">刪除床型</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection
