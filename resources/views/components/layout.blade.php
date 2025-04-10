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
                <x-nav-desktop-link href="/" aria-current="page">Início</x-nav-desktop-link>
                <x-nav-desktop-link href="#">Mais lidos</x-nav-desktop-link>
                <x-nav-desktop-link href="#">Projects</x-nav-desktop-link>
                <x-nav-desktop-link href="#">Calendar</x-nav-desktop-link>
              </div>
            </div>
          </div>

          <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">
              <div class="relative ml-3 group">
                <div>
                  <button
                    type="button"
                    class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-none"
                    id="user-menu-button"
                    aria-expanded="false"
                    aria-haspopup="true"
                  >
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    <img class="size-8 rounded-full" src="https://avatar.iran.liara.run/public/boy" alt="">
                  </button>
                </div>

                <div
                  class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none opacity-0 invisible transition-opacity duration-600 group-hover:opacity-100 group-hover:visible"
                  role="menu"
                  aria-orientation="vertical"
                  aria-labelledby="user-menu-button"
                  tabindex="-1"
                >
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Perfil</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Dashboard</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sair</a>
                </div>
              </div>
            </div>
          </div>

          <div class="-mr-2 flex md:hidden">
            <button type="button" id="menu-button" class="relative inline-flex items-center justify-center rounded-md bg-blue-600 p-2 text-white hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <svg id="open-icon" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <svg id="close-icon" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>

      <div class="md:hidden hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
          <x-nav-mobile-link href="/" :active="request()->is('/')">Início</x-nav-mobile-link>
          <x-nav-mobile-link href="/popular" :active="request()->is('popular')">Mais lidos</x-nav-mobile-link>
        </div>
        <div class="border-t border-gray-300 pt-4 pb-3">
          <div class="flex items-center px-5">
            <div class="shrink-0">
              <img class="size-10 rounded-full" src="https://avatar.iran.liara.run/public/boy" alt="">
            </div>
            <div class="ml-3">
              <div class="text-base/5 font-medium text-gray-900">Evandro</div>
              <div class="text-sm font-medium text-gray-500">evandro@example.com</div>
            </div>
          </div>
          <div class="mt-3 space-y-1 px-2">
            <x-nav-mobile-link href="#">Perfil</x-nav-mobile-link>
            <x-nav-mobile-link href="#">Dashboard</x-nav-mobile-link>
            <x-nav-mobile-link href="#">Sair</x-nav-mobile-link>
          </div>
        </div>
      </div>
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
