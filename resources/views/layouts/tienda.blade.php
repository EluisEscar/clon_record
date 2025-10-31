<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'RECORD Perú')</title>

  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-gray-100 text-gray-800 antialiased font-sans">
  {{-- Header --}}
  <x-header />

  {{-- Contenido: ocupa todo lo disponible entre header y footer --}}
  <main class="flex-1 flex flex-col">
    @yield('content')
  </main>

  {{-- Footer pegado al final (sin margen superior) --}}
  <x-footer />
</body>
</html>
