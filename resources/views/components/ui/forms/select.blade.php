@props([
  'label',
  'name',
  'id' => $name,
  'name' => $name,
  'options' => [],
  'selected' => null,
])

@php
  $classes = 'w-full p-3 rounded-md border border-gray-300 focus:border-gray-500 focus:ring-1 focus:ring-gray-500 bg-white';
@endphp

<x-ui.forms.field
  :$label
  :$name
>
  <select 
    name="{{ $name }}" 
    id="{{ $id }}"
    {{ $attributes->merge(['class' => $classes]) }}
  >
    @foreach ($options as $option)
      <option value="{{ $option->id }}">{{ $option->name }}</option>
    @endforeach
  </select>
</x-ui.forms.field>