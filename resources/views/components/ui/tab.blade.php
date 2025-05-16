@props(['value'])

<div
  x-bind:class="{
    'bg-white text-gray-900 rounded': {{ $attributes->get('x-model') }} === '{{ $value }}',
    'text-gray-700': {{ $attributes->get('x-model') }} !== '{{ $value }}'
  }"
  class="px-5 py-2 text-sm font-bold text-center flex-1 cursor-pointer"
  @click="{{ $attributes->get('x-model') }} = '{{ $value }}'"
>
  {{ $slot }}
</div>
