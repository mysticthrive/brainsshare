<div class="min-h-full">
  <nav>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <a href="/" class="shrink-0 font-bold text-xl text-blue-600">
            TechInside
          </a>
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