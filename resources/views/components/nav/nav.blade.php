<div class="min-h-full border-b border-b-gray-200">
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

        @auth
          <x-nav.user-dropdown/>
        @endauth

        @guest
          <div class="flex items-center gap-2">
            <x-ui.forms.button href="/login">Entrar</x-ui.forms.button>
            <x-ui.forms.button href="/register" outline>Criar conta</x-ui.forms.button>
          </div>
        @endguest

        <x-nav.mobile-button/>
      </div>
    </div>

    <x-nav.mobile-menu/>
  </nav>
</div>