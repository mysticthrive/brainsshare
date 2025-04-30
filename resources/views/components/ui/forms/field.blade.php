@props([
  'label',
  'name',
  'icon' => false,
  'tip' => null
])

<div class="relative">
  @if ($label)
    <x-ui.forms.label :$name :$label/>
  @endif

  @if ($icon)
    <img src="{{ asset('images/icons/'.$icon.'.svg') }}" class="absolute w-5 h-5 text-blue-400 transform -translate-y-1/2 left-3 top-1/2" alt="">
  @endif

  <div>
    {{ $slot }}

    @if ($tip)
      <x-ui.forms.field-tip :$tip />
    @endif
    
    <x-ui.forms.error :error="$errors->first($name)"/>
  </div>
</div>