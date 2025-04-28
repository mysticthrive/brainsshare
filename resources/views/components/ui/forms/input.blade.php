@props([
  'label' => false,
  'icon' => false,
  'name', 
  'variant' => 'default',
  'type' => 'text',
  'id' => $name,
  'wrapperClass' => '',
  'inputClass' => ''
])

@php
    $baseClasses = 'w-full pl-3 pr-3 h-12 border rounded-md outline-none transition-colors';

    $variantClasses = [
      'default' => 'border-gray-400 focus:border-gray-500 focus:ring-1 focus:ring-gray-500',
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
  <input 
    type="{{ $type }}"
    id="{{ $id }}"
    name="{{ $name }}"
    {{ $attributes->merge(['class' => $inputClasses]) }}
  />
</x-ui.forms.field>