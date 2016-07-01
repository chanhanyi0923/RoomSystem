@extends('layouts.form')

@section('content')
<table class="table">
	<thead>
		<tr>
			<th>用戶名</th>
			<th>管理員</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($users as $user)
		<tr>
			<td>{{ $user->name }}</td>
			<td>{{ $user->admin ? '是' : '否' }}</td>
			<td>
				<form action="{{ url('/manage_user/'.$user->id) }}" method="POST" style="display:inline;">
					<input type="hidden" name="_method" value="PUT">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<button class="btn btn-warning">變更權限</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection
