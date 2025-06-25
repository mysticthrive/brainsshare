@props(['activity'])

@php
  $icons = [
    'Post publicado' => 'doc-blue.svg',
    'Post atualizado' => 'edit-blue.svg',
    'Post deletado' => 'trash-blue.svg  ',
  ];

  $icon = $icons[$activity->action];
@endphp

<div class="flex items-center gap-3">
  <div class="w-8 p-2 rounded-full bg-blue-100">
    <img src="{{ asset('images/icons/' . $icon) }}" alt="">
  </div>
  
  <div class="flex-1 min-w-0">
    <h4 class="text-sm font-bold text-gray-800">{{ $activity->action }}</h4>
    <p class="text-sm truncate whitespace-nowrap overflow-hidden text-gray-700">
      {{ $activity->description }}
    </p>
  </div>
</div>