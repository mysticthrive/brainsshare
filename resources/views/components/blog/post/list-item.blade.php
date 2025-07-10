@props(['post', 'index'])

<div class="flex items-start gap-6">
  <span class="text-lg font-black text-blue-300">{{ $index + 1 }}</span>
  <x-blog.post.thumbnail size="small" link="{{ $post->image }}"/>
  
  <div class="space-y-2">
    @foreach ($post->tags as $tag)
      <x-ui.badge href="#" small>{{ $tag->name }}</x-ui.badge>
    @endforeach
    <h3 class="font-bold line-clamp-2 text-gray-900 hover:text-blue-600 transition-colors duration-300">{{ $post->title }}</h3>
    <span class="text-gray-600">{{ $post->views }} views</span>
  </div>
</div>