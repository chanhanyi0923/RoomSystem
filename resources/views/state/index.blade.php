@extends('layouts.app')

@section('content')

@foreach($states as $state)
{{ $state->label }}
@endforeach

@endsection
