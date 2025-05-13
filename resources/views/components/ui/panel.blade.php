@props(['border' => 'gray'])

@php
  $baseClasses = 'p-6 rounded-md border space-y-3 bg-white transition-colors duration-300';

  $borderClasses = [
    'gray' => 'border-gray-200',
    'blue' => 'border-blue-100 hover:bg-blue-50',
  ][$border];

  $classes = implode(' ', [
    $baseClasses,
    $borderClasses
]);
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
  {{ $slot }}
</div>