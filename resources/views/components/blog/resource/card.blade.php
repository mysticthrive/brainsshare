<x-ui.panel>
  <div class="flex items-center justify-between">
    <img src="{{ asset('images/icons/download-outline.svg') }}" class="w-7 h-7" alt="">
    <x-ui.badge small :pill="false">Resource kit</x-ui.badge>
  </div>
  <div class="space-y-2">
    <h3 class="text-2xl font-bold">Ultimate DevOps Toolkit</h3>
    <p class="text-sm text-gray-500">Essential tools and resources for modern DevOps practices</p>
  </div>
  <a href="#" class="font-medium text-blue-600 flex items-center gap-2">
    Download now <img src="{{ asset('images/icons/download-outline.svg') }}" class="w-5 h-5" alt="">
  </a>
</x-ui.panel>