<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">My Web App</a>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
      <li class="nav-item"><a href="{{ route('program') }}" class="nav-link">Program</a></li>
      <li class="nav-item"><a href="{{ route('ourteam') }}" class="nav-link">Our Team</a></li>
      <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
    @yield('content')
</div>

<footer class="text-center mt-5 mb-3 text-muted">
    <small>© by Dalila Tazkia | NIM: 231020004</small>
</footer>

</body>
</html>
