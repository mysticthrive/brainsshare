<div x-show="tab === 'overview'" class="space-y-6">
  <div class="grid gap-2 sm:grid-cols-2 lg:grid-cols-4">
    <x-ui.panel>
      <div class="flex justify-between">
        <span class="font-medium">Total Posts</span>
        <img src="{{ asset('images/icons/doc.svg') }}" class="w-4">
      </div>
      <div>
        <span class="text-3xl font-bold text-gray-900">{{ $statistics['totalPosts'] }}</span>
        <p class="text-sm text-gray-700">+{{ $statistics['publishedLast30Days'] }} no ultimo mês</p>
      </div>
    </x-ui.panel>
    
    <x-ui.panel>
      <div class="flex justify-between">
        <span class="font-medium">Total Views</span>
        <img src="{{ asset('images/icons/eye.svg') }}" class="w-4">
      </div>
      <div>
        <span class="text-3xl font-bold text-gray-900">{{ $statistics['totalViews'] }}</span>
        <p class="text-sm text-gray-700">+18% no ultimo mês</p>
      </div>
    </x-ui.panel>

    <x-ui.panel>
      <div class="flex justify-between">
        <span class="font-medium">Inscrições</span>
        <img src="{{ asset('images/icons/users.svg') }}" class="w-4">
      </div>
      <div>
        <span class="text-3xl font-bold text-gray-900">573</span>
        <p class="text-sm text-gray-700">+38 nesse mês</p>
      </div>
    </x-ui.panel>

    <x-ui.panel>
      <div class="flex justify-between">
        <span class="font-medium">Engajamento</span>
        <img src="{{ asset('images/icons/trending-up.svg') }}" class="w-4">
      </div>
      <div>
        <span class="text-3xl font-bold text-gray-900">12.4K</span>
        <p class="text-sm text-gray-700">+18% no ultimo mês</p>
      </div>
    </x-ui.panel>
  </div>
  <x-ui.panel>
    <div class="space-y-1 mb-6">
      <h3 class="text-2xl font-bold text-gray-900">Atividades recentes</h3>
      <p class="text-sm text-gray-700">Sua ultimas atividades no blog</p>
    </div>
    <div class="space-y-4">
      @foreach ($groupedActivities as $label => $activityGroup)
        <h3 class="font-medium">{{ $label }}</h3>
        @foreach ($activityGroup as $activity)
          <x-blog.dashboard.activity-item :$activity/>
        @endforeach
        <hr class="text-gray-200">
      @endforeach

      {{ $activities->appends(['tab' => 'overview'])->links() }}
    </div>
  </x-ui.panel>
  <x-ui.panel>
    @php
      $maxCount = $popularCategories->max('posts_count');
    @endphp
    <h3 class="text-2xl font-bold text-gray-900">Popular Categories</h3>

    <ul class="space-y-4">
      @foreach ($popularCategories as $category)
        @php
          $percentage = $maxCount > 0 ? ($category->posts_count / $maxCount) * 100 : 0;
        @endphp

        <li>
          <div class="flex justify-between text-sm mb-1">
            <span>{{ $category->name }}</span>
            <span class="text-gray-500">{{ $category->posts_count }} posts</span>
          </div>

          <div class="w-full bg-gray-200 rounded h-2">
            <div class="bg-blue-600 h-2 rounded" style="width: {{ $percentage }}%"></div>
          </div>
        </li>
      @endforeach
    </ul>
  </x-ui.panel>
</div>