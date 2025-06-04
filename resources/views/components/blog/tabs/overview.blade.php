<div x-show="tab === 'overview'" class="space-y-6">
  <div class="grid gap-2 sm:grid-cols-2 lg:grid-cols-4">
    <x-ui.panel>
      <div class="flex justify-between">
        <span class="font-medium">Total Posts</span>
        <img src="{{ asset('images/icons/doc.svg') }}" class="w-4">
      </div>
      <div>
        <span class="text-3xl font-bold text-gray-900">{{ $posts->count() }}</span>
        <p class="text-sm text-gray-700">+{{ $publishedLast30Days }} no ultimo mês</p>
      </div>
    </x-ui.panel>
    
    <x-ui.panel>
      <div class="flex justify-between">
        <span class="font-medium">Total Views</span>
        <img src="{{ asset('images/icons/eye.svg') }}" class="w-4">
      </div>
      <div>
        <span class="text-3xl font-bold text-gray-900">{{ $posts->sum('views') }}</span>
        <p class="text-sm text-gray-700">+18% no ultimo mês</p>
      </div>
    </x-ui.panel>

    <x-ui.panel>
      <div class="flex justify-between">
        <span class="font-medium">Inscrições</span>
        <img src="{{ asset('images/icons/users.svg') }}" class="w-4">
      </div>
      <div>
        <span class="text-3xl font-bold text-gray-900">573</span>
        <p class="text-sm text-gray-700">+38 nesse mês</p>
      </div>
    </x-ui.panel>

    <x-ui.panel>
      <div class="flex justify-between">
        <span class="font-medium">Engajamento</span>
        <img src="{{ asset('images/icons/trending-up.svg') }}" class="w-4">
      </div>
      <div>
        <span class="text-3xl font-bold text-gray-900">12.4K</span>
        <p class="text-sm text-gray-700">+18% no ultimo mês</p>
      </div>
    </x-ui.panel>
  </div>
  <x-ui.panel>
    <div class="space-y-1 mb-6">
      <h3 class="text-2xl font-bold text-gray-900">Atividades recentes</h3>
      <p class="text-sm text-gray-700">Sua ultimas atividades no blog</p>
    </div>
    <div class="space-y-4">
      <div class="flex items-center gap-3">
        <div class="w-8 p-2 rounded-full bg-blue-100">
          <img src="{{ asset('images/icons/doc-blue.svg') }}" alt="">
        </div>

        <div class="flex-1 min-w-0">
          <h4 class="text-sm font-bold text-gray-800">Post publicado</h4>
          <p class="text-sm truncate whitespace-nowrap overflow-hidden text-gray-700">
            O futuro da IA no desenvolvimento de software
          </p>
        </div>

        <span class="text-xs whitespace-nowrap text-gray-700">2 horas atrás</span>
      </div>

      <div class="flex items-center gap-3">
        <div class="w-8 p-2 rounded-full bg-blue-100">
          <img src="{{ asset('images/icons/edit-blue.svg') }}" alt="">
        </div>

        <div class="flex-1 min-w-0">
          <h4 class="text-sm font-bold text-gray-800">Post atualizado</h4>
          <p class="text-sm truncate whitespace-nowrap overflow-hidden text-gray-700">
            O futuro da IA no desenvolvimento de software
          </p>
        </div>

        <span class="text-xs whitespace-nowrap text-gray-700">5 horas atrás</span>
      </div>

      <div class="flex items-center gap-3">
        <div class="w-8 p-2 rounded-full bg-blue-100">
          <img src="{{ asset('images/icons/comment-blue.svg') }}" alt="">
        </div>

        <div class="flex-1 min-w-0">
          <h4 class="text-sm font-bold text-gray-800">Comentário recebido</h4>
          <p class="text-sm truncate whitespace-nowrap overflow-hidden text-gray-700">
            O futuro da IA no desenvolvimento de software
          </p>
        </div>

        <span class="text-xs whitespace-nowrap text-gray-700">1 hora atrás</span>
      </div>

      <div class="flex items-center gap-3">
        <div class="w-8 p-2 rounded-full bg-blue-100">
          <img src="{{ asset('images/icons/doc-blue.svg') }}" alt="">
        </div>

        <div class="flex-1 min-w-0">
          <h4 class="text-sm font-bold text-gray-800">Post publicado</h4>
          <p class="text-sm truncate whitespace-nowrap overflow-hidden text-gray-700">
            O futuro da IA no desenvolvimento de software
          </p>
        </div>

        <span class="text-xs whitespace-nowrap text-gray-700">2 horas atrás</span>
      </div>
    </div>
  </x-ui.panel>
</div>