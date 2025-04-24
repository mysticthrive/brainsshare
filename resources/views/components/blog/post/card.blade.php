@props(['compact' => false, 'post'])

<div class="rounded-lg border border-gray-100 overflow-hidden">
  <x-blog.post.thumbnail :showBadge="$compact" :link="$post->image" :category="$post->category"/>

  <div class="p-6 space-y-8">

    <div class="space-y-2">
      @unless ($compact)
        @foreach ($post->tags as $tag)
          <x-ui.badge href="#" small>{{ $tag->name }}</x-ui.badge>
        @endforeach
      @endunless
      <h3 class="text-lg font-bold line-clamp-2 text-gray-900 hover:text-blue-600 transition-colors duration-300">{{ $post->title }}</h3>
      <p class="text-gray-600 line-clamp-2">{{ $post->excerpt }}</p>
      @if ($compact)
        <span class="text-sm font-medium text-blue-600">by {{ $post->user->name }}</span>
      @endif
    </div>

    @unless ($compact)
      <div class="text-sm font-medium text-gray-600 space-x-2">
        <span class="text-blue-600">{{ $post->user->name }}</span>
        <span>·</span>
        <span>{{ \Carbon\Carbon::parse($post->created_at)->locale('pt_BR')->translatedFormat('d \d\e F\, Y') }}</span>
        <span>·</span>
        <span>4 min</span>
      </div> 
    @endunless
  </div>
</div>