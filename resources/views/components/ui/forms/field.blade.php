@props(['icon'])

<div class="relative flex-1">
  @if ($icon)
    <img src="{{ asset('images/icons/'.$icon.'.svg') }}" class="absolute w-5 h-5 text-blue-400 transform -translate-y-1/2 left-3 top-1/2" alt="">
  @endif
  {{ $slot }}
</div>