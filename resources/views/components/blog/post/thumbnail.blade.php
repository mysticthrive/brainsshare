@props(['size' => 'base', 'badge' => null, 'link'])

@php
  $classes = 'shrink-0 relative';

  if($size == 'base'){
    $classes .= ' h-48';
  }

  if($size == 'small'){
    $classes .= ' w-24 h-24 rounded-md';
  }
@endphp

<div {{ $attributes(['class' => $classes]) }}>
  <img src="{{ $link }}" alt="" class="w-full h-full object-cover">
  @if ($badge)
    <x-ui.badge href="#" class="absolute top-6 left-6" small variant="blue">Webdev</x-ui.badge>
  @endif
</div>