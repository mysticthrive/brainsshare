@props([
  'pill' => true, 
  'small' => false, 
  'href' => null,
  'variant' => 'default'
])

@php
  $classes = 'inline-block shrink-0';

  $classes .= $pill ? ' rounded-3xl' : ' rounded-sm';
  $classes .= $small ? ' px-3 py-1 text-xs font-semibold' : ' px-4 py-2 text-sm font-medium';
  
  switch ($variant) {
    case 'blue':
      $style = ' bg-blue-600 text-white hover:bg-blue-700 transition-colors duration-300';
      break;

    case 'white':
      $style = ' border border-blue-100 bg-white text-blue-600';
      break;

    default:
      $style = ' bg-blue-50 text-blue-600 hover:bg-blue-100 transition-colors duration-300';
      break;
  }

  $classes .= $style;
@endphp

@if($href)
  <a {{ $attributes->merge(['class' => $classes . 'cursor-pointer', 'href' => $href]) }}>
    {{ $slot }}
  </a>
@else
  <span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
  </span>
@endif