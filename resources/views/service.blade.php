@extends('master')

@section('content')

{{-- <h1>{{ $services }}</h1> --}}

@for ($index = 0;$index<4;$index++) <br>
{{ $services[$index] }}

@endfor

@endsection
