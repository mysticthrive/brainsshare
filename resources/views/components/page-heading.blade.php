@props(['title', 'subtitle'])

<div {{ $attributes->merge(['class' => 'mb-12 space-y-1']) }}>
  <h1 class="text-3xl font-black text-gray-900 md:text-4xl lg:text-5xl">{{ $title }}</h1>
  <p class="text-gray-600">{{ $subtitle }}</p>
</div>