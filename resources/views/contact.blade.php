@extends('layout')
@section('title', 'Contact')
@section('content')
<h1>Hubungi Kami</h1>
<form class="mt-3">
  <div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" class="form-control" id="name" placeholder="Masukkan nama kamu">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" placeholder="nama@email.com">
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Pesan</label>
    <textarea class="form-control" id="message" rows="3" placeholder="Tulis pesan kamu di sini"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Kirim</button>
</form>
@endsection
