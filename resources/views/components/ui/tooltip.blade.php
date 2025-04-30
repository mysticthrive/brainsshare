@props([
  'tip',
])

<div class="relative group inline-block">
  <img class="w-4" src="{{ asset('images/icons/info.svg') }}" alt="">

  <div class="w-max max-w-xs px-3 py-1.5 text-xs rounded-md hidden group-hover:block z-10 absolute top text-white bg-gray-800  ">
    {{ $tip }}
  </div>
</div>
