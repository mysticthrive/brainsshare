@props([
  'label' => false,
  'icon' => false,
  'name',
  'variant' => 'default',
  'type' => 'text',
  'id' => $name,
  'as' => 'input'
])

@php
  $baseClasses = 'w-full px-3 py-3 border rounded-md outline-none bg-white transition-colors';

  $variantClasses = [
    'default' => 'border-gray-300 focus:border-gray-500 focus:ring-1 focus:ring-gray-500',
    'blue' => 'border-blue-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500',
  ][$variant];

  $iconPadding = $icon ? ' pl-10' : '';

  $inputClasses = implode(' ', [
    $baseClasses,
    $variantClasses,
    $iconPadding
  ]);
@endphp

<x-ui.forms.field 
  :$icon 
  :$label 
  :$name
>
  @if ($as === 'textarea')
    <textarea 
      id="{{ $id }}"
      name="{{ $name }}"
      {{ $attributes->merge(['class' => $inputClasses]) }}></textarea>
  @else
    <input 
      type="{{ $type }}"
      id="{{ $id }}"
      name="{{ $name }}"
      {{ $attributes->merge(['class' => $inputClasses]) }} />
  @endif
</x-ui.forms.field>
