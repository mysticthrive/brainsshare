@props([
  'pill' => true, 
  'small' => false, 
  'href' => null,
  'variant' => 'default'
])

@php
  $classes = 'font-medium text-blue-600  cursor-pointer';

  $classes .= $pill ? ' rounded-3xl' : ' rounded-sm';
  $classes .= $small ? ' px-3 py-1 text-xs' : ' px-4 py-2 text-sm';
  $classes .= $variant == 'default' ? ' bg-blue-50 hover:bg-blue-100 transition-colors duration-300' : ' border border-blue-100 bg-white';
@endphp

@if($href)
    <a {{ $attributes->merge(['class' => $classes, 'href' => $href]) }}>
        {{ $slot }}
    </a>
@else
    <span {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </span>
@endif