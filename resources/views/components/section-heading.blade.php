@props(['link' => false])

<div class="mb-8 flex items-center justify-between">
  <h2 class="text-3xl font-bold">{{ $slot }}</h2>
  @if ($link)
    <a href="{{ $link }}" class="text-sm font-medium text-gray-700">Ver todos →</a>
  @endif
</div>