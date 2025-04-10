<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog Tecnologia</title>
  @vite(['resources/js/app.js'])
</head>
<body>
  <div class="min-h-full">
    <nav>
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
            <div class="shrink-0 font-bold text-xl text-blue-600">
              TechInside
            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <x-nav.desktop-link href="/" :active="request()->is('/')">Início</x-nav.desktop-link>
                <x-nav.desktop-link href="/popular" :active="request()->is('popular')">Mais lidos</x-nav.desktop-link>
              </div>
            </div>
          </div>

          <x-nav.user-dropdown/>
          <x-nav.mobile-button/>
        </div>
      </div>

      <x-nav.mobile-menu/>
    </nav>
  </div>

  <main>
    {{ $slot }}
  </main>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.querySelector('#menu-button');
    const mobileMenu = document.querySelector('#mobile-menu');
    const openIcon = menuButton.querySelector('#open-icon');
    const closeIcon = menuButton.querySelector('#close-icon');

    function toggleMenu() {
      mobileMenu.classList.toggle('hidden');
      
      openIcon.classList.toggle('hidden');
      closeIcon.classList.toggle('hidden');
      
      const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
      menuButton.setAttribute('aria-expanded', !isExpanded);
    }

      menuButton.addEventListener('click', toggleMenu);
    });
    </script>
</body>
</html>
