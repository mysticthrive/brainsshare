<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite(['resources/js/app.js'])
  @stack('scripts')
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <title>Blog Tecnologia</title>
</head>
<body class="min-h-screen flex flex-col">
  <x-nav/>

  <main class="flex-1 flex flex-col">
    {{ $slot }}
  </main>

  <x-footer/>
</body>
</html>
