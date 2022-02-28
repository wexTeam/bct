<!doctype html>
<html lang="en">
<head>
@include('front-end.partials._head')
</head>
<body class="d-flex flex-column min-vh-100 justify-content-between">
@include('front-end.partials._header')
<main class="d-flex flex-column justify-content-center flex-grow-1">
  @include('front-end.partials._banner')
  @yield('content')
</main>
@include('front-end.partials._footer')
@include('front-end.partials._scripts')
</body>
</html>