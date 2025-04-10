<div class="md:hidden hidden" id="mobile-menu">
  <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
    <x-nav.mobile-link href="/" :active="request()->is('/')">Início</x-nav.mobile-link>
    <x-nav.mobile-link href="/popular" :active="request()->is('popular')">Mais lidos</x-nav.mobile-link>
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
      <x-nav.mobile-link href="#">Perfil</x-nav.mobile-link>
      <x-nav.mobile-link href="#">Dashboard</x-nav.mobile-link>
      <x-nav.mobile-link href="#">Sair</x-nav.mobile-link>
    </div>
  </div>
</div>