@props(['label', 'name', 'icon' => false])

@php
    $classes = 'w-full pr-3 h-12 border border-blue-300 border-brand-200 rounded-md bg-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none transition-colors';

    $classes .= $icon ? ' pl-10' : ' pl-3';

    $defaults = [
      'type' => 'text',
      'id' => $name,
      'name' => $name,
      'class' => $classes
    ]
@endphp

<input {{ $attributes($defaults) }}/>