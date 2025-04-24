@props([
  'size' => 'base', 
  'showBadge' => false,
  'link',
  'category' => null
])

@php
  $sizeClasses = [
    'base' => 'h-48',
    'small' => 'w-24 h-24 rounded-md'
  ][$size];

  $classes = "shrink-0 relative overflow-hidden $sizeClasses";
@endphp

<div {{ $attributes(['class' => $classes]) }}>
  <img src="{{ $link }}" class="w-full h-full object-cover" alt="" loading="lazy">

  @if ($showBadge)
    <x-ui.badge href="/categories/{{ strtolower($category->name) }}" class="absolute top-6 left-6" small variant="blue">{{ $category->name }}</x-ui.badge>
  @endif
</div>