@props(['size' => 'base', 'badge' => null])

@php
  $classes = 'bg-gray-200 shrink-0 relative';

  if($size == 'base'){
    $classes .= ' h-48';
  }

  if($size == 'small'){
    $classes .= ' w-24 h-24 rounded-md';
  }
@endphp

<div {{ $attributes(['class' => $classes]) }}>
  <img src="" alt="" class="object-cover">
  @if ($badge)
    <x-ui.badge href="#" class="absolute top-6 left-6" small variant="blue">Webdev</x-ui.badge>
  @endif
</div>