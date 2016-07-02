@extends('layouts.main')

@section('title')
操作完成
@endsection

@section('content')
<h3>操作完成</h3>
<p>返回後若狀態未更新，請重新整理頁面。</p>
<a class="btn btn-default btn-lg" onclick="history.go(-2);">回上頁</a>
@endsection
