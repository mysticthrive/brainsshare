@props([
  'variant' => 'default',
  'href' => null,
  'outline' => false,
  'type' => 'submit'
])

@php
  $baseClasses = 'px-6 py-2 rounded-md font-medium cursor-pointer block text-center transition-colors duration-200';

  $variantStyles = [
    'default' => [
      'filled' => 'border border-blue-600 bg-blue-600 text-white hover:bg-blue-700',
      'outline' => 'border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white'
    ],
    'success' => [
      'filled' => 'border border-green-600 bg-green-600 text-white hover:bg-green-700',
      'outline' => 'border border-green-600 text-green-600 hover:bg-green-600 hover:text-white'
    ],
    'danger' => [
      'filled' => 'border border-red-600 bg-red-600 text-white hover:bg-red-700',
      'outline' => 'border border-red-600 text-red-600 hover:bg-red-600 hover:text-white'
    ]
  ];

  $variantClasses = $variantStyles[$variant][$outline ? 'outline' : 'filled'] ?? '';

  $classes = implode(' ', [$baseClasses, $variantClasses]);
@endphp

@if ($href)
  <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
  </a>
@else
  <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
  </button>
@endif
