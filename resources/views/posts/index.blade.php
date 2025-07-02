<x-layout>
  <x-section>
    <x-section-heading>Todos os posts</x-section-heading>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      @foreach ($posts as $post)
        <x-blog.post.card :$post/>
      @endforeach
    </div>
    <div class="mt-8">
      {{ $posts->links() }}
    </div>
  </x-section>
</x-layout>