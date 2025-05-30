<x-layout>
  <section class="py-8 px-5 md:py-14 lg:py-20 bg-gray-50">
    <div class="max-w-[1280px] mx-auto">
      <div class="sm:flex items-center justify-between">
        <x-page-heading title="Dashboard" subtitle="Gerencie o conteúdo do seu blog e veja estatísticas." class="!mb-4"/>
        <x-ui.forms.button href="/admin/posts/create">Novo post</x-ui.forms.button>
      </div>

      <div x-data="{ tab: 'visao' }" class="mt-6">
        <div class="sm:w-max p-1 rounded bg-gray-100 flex">
          <x-ui.tab value="visao" x-model="tab">Visão</x-ui.tab>
          <x-ui.tab value="posts" x-model="tab">Posts</x-ui.tab>
          <x-ui.tab value="drafts" x-model="tab">Drafts</x-ui.tab>
          <x-ui.tab value="stats" x-model="tab">Stats</x-ui.tab>
        </div>
  
        <div class="mt-6">
          <div x-show="tab === 'visao'" class="space-y-6">
            <div class="grid gap-2 sm:grid-cols-2 lg:grid-cols-4">
              <x-ui.panel>
                <div class="flex justify-between">
                  <span class="font-medium">Total Posts</span>
                  <img src="{{ asset('images/icons/doc.svg') }}" class="w-4">
                </div>
                <div>
                  <span class="text-3xl font-bold text-gray-900">24</span>
                  <p class="text-sm text-gray-700">+2 no ultimo mês</p>
                </div>
              </x-ui.panel>
              
              <x-ui.panel>
                <div class="flex justify-between">
                  <span class="font-medium">Total Views</span>
                  <img src="{{ asset('images/icons/eye.svg') }}" class="w-4">
                </div>
                <div>
                  <span class="text-3xl font-bold text-gray-900">12.4K</span>
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
  
          <div x-show="tab === 'posts'">
            <x-ui.panel>
              <div class="space-y-1 mb-6">
                <h3 class="text-2xl font-bold text-gray-900">Posts publicados</h3>
                <p class="text-sm text-gray-700">Sua ultimas atividades no blog</p>
              </div>
              <div class="rounded border border-gray-200 overflow-x-auto">
                <table class="w-full text-sm table-auto ">
                  <thead class="bg-gray-50 border-b border-gray-200">
                    <tr class="text-left text-gray-500 font-bold">
                      <th class="px-3 py-3 w-full">Nome</th>
                      <th class="px-3 py-3 hidden md:table-cell">Categoria</th>
                      <th class="px-3 py-3 hidden sm:table-cell">Data</th>
                      <th class="px-3 py-3 hidden lg:table-cell">Views</th>
                      <th class="px-3 py-3 whitespace-nowrap">Status</th>
                      <th class="min-w-[140px] px-3 py-3 text-right whitespace-nowrap">Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($posts as $post)
                      <tr class="border-b border-gray-100 text-gray-900">
                        <td class="px-3 py-5 truncate">
                          {{ $post->title }}
                        </td>
                        <th class="px-3 py-3 hidden md:table-cell">{{ $post->category->name }}</th>
                        <td class="px-3 py-5 hidden sm:table-cell text-gray-500 whitespace-nowrap">
                          {{ $post->created_at->format('d/m/Y') }}
                        </td>
                        <td class="px-3 py-5 hidden lg:table-cell text-gray-500 whitespace-nowrap">
                          {{ $post->views }}
                        </td>
                        <td class="px-3 py-5 whitespace-nowrap">
                          @if ($post->featured)
                            <x-ui.badge variant="blue" small>Destaque</x-ui.badge>
                          @elseif ($post->published)
                            <x-ui.badge small>Publicado</x-ui.badge>
                          @else
                            <x-ui.badge variant="white" small>Oculto</x-ui.badge>
                          @endif
                        </td>

                        <td class="px-3 py-5 text-right whitespace-nowrap">
                          <div class="flex justify-end gap-4">
                            <a href="/posts/{{ $post->slug }}" target="_blank">
                              <img src="{{ asset('images/icons/eye.svg') }}" class="w-5">
                            </a>
                            <a href="/admin/posts/{{ $post->id }}/edit">
                              <img src="{{ asset('images/icons/edit.svg') }}" class="w-5">
                            </a>
                            <img src="{{ asset('images/icons/trash.svg') }}" class="w-5">
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </x-ui.panel>
          </div>

          <div x-show="tab === 'drafts'">Conteúdo da aba Drafts</div>

          <div x-show="tab === 'stats'">Conteúdo da aba Stats</div>
        </div>
      </div>
    </div>
  </section>
</x-layout>
