<div x-show="tab === 'posts'">
  <x-ui.panel>
    <div class="space-y-1 mb-6">
      <h3 class="text-2xl font-bold text-gray-900">Posts publicados</h3>
      <p class="text-sm text-gray-700">Sua ultimas atividades no blog</p>
    </div>
    <div class="rounded border border-gray-200 overflow-x-auto">
      <table class="w-full text-sm table-auto">
        <thead class="border-b border-gray-200">
          <tr class="text-left text-gray-500 font-bold">
            <th class="px-3 py-5">Título</th>
            <th class="px-3 py-5 hidden md:table-cell">Categoria</th>
            <th class="px-3 py-5 hidden sm:table-cell">Data</th>
            <th class="px-3 py-5 hidden lg:table-cell">Views</th>
            <th class="px-3 py-5 whitespace-nowrap">Status</th>
            <th class="min-w-[140px] px-3 py-5 text-right whitespace-nowrap">Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
            <tr class="border-b border-gray-100 text-gray-900">
              <td class="px-3 py-5 truncate">
                {{ $post->title }}
              </td>
              <th class="px-3 py-3 hidden text-left md:table-cell">{{ $post->category->name }}</th>
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
                  <form action="/admin/posts/{{ $post->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="cursor-pointer">
                      <img src="{{ asset('images/icons/trash.svg') }}" class="w-5">
                    </button>
                  </form>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{ $posts->appends(['tab' => 'posts'])->links() }}
  </x-ui.panel>
</div>