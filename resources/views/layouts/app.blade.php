<!doctype html>
<html lang="es" class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name', 'Blog Empresarial') }}</title>

  {{-- Vite (Blade) --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    html { scroll-padding-top: 90px; }
  </style>
</head>

<body class="min-h-screen bg-[#f5f6f7] text-slate-900 antialiased">
  @yield('content')
</body>
</html>