@props(['compact' => false, 'post'])

<div class="rounded-lg border border-gray-100 overflow-hidden">
  <x-blog.post.thumbnail :badge="$compact" link="{{ $post->image }}"/>

  <div class="p-6 space-y-8">
 
    <div class="space-y-2">
      @unless ($compact)
        <x-ui.badge href="#" small>Web dev</x-ui.badge>
      @endunless
      <h3 class="text-lg font-bold line-clamp-2 text-gray-900 hover:text-blue-600 transition-colors duration-300">{{ $post->title }}</h3>
      <p class="text-gray-600 line-clamp-2">Learn how to leverage Next.js features to build performant and scalable web</p>
      @if ($compact)
        <span class="text-sm font-medium text-blue-600">by Evandro Mateus</span>
      @endif
    </div>

    @unless ($compact)
      <div class="text-sm font-medium text-gray-600 space-x-2">
        <span class="text-blue-600">Evandro Mateus</span>
        <span>·</span>
        <span>12 de Maio, 2025</span>
        <span>·</span>
        <span>4 min</span>
      </div> 
    @endunless
  </div>
</div>