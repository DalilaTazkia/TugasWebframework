@extends('layout')
@section('title', '404 Not Found')
@section('content')
<div class="text-center mt-5">
    <h1 class="display-3 text-danger">404</h1>
    <p>Oops! Halaman yang kamu cari tidak ditemukan.</p>
    <a href="{{ route('home') }}" class="btn btn-dark">Kembali ke Home</a>
</div>
@endsection
