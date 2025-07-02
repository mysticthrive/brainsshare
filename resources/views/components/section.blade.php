@props(['compact' => false])

@php
  $paddingClass = $compact
    ? 'py-4 md:py-6 lg:py-10'
    : 'py-8 md:py-14 lg:py-20';
@endphp

<section {{ $attributes->merge(['class' => 'w-full max-w-[1200px] mx-auto px-2 md:px-4 flex-1 ' . $paddingClass]) }}>
  {{ $slot }}
</section>