@extends('layout')
@section('title', 'Program Detail')
@section('content')
<h1>Detail Program: {{ $name }}</h1>
<p>Ini adalah halaman detail untuk program <b>{{ $name }}</b>.</p>
@endsection
