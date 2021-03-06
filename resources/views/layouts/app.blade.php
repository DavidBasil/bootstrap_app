<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
  {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Arvo:700&display=swap" rel="stylesheet">
  <style type="text/css" media="screen">
body {
  font-family: 'Arvo', serif;
}
.about-picture {
  background: url("/images/background.jpg")center/cover no-repeat fixed;
}
  </style>
</head>
<body>
@yield('content')
</body>
</html>
