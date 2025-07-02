<x-layout>
  <div class="bg-gray-50 flex-1">
    <x-section>
      <div class="max-w-[1280px] mx-auto">
        <div class="sm:flex items-center justify-between">
          <x-page-heading title="Dashboard" subtitle="Gerencie o conteúdo do seu blog e veja estatísticas." class="!mb-4"/>
          <x-ui.forms.button href="/admin/posts/create">Novo post</x-ui.forms.button>
        </div>
        
        <div 
          x-data="{
            tab: (new URLSearchParams(window.location.search)).get('tab') || 'overview',
              updateUrl() {
                const url = new URL(window.location);
                url.searchParams.set('tab', this.tab);
                window.history.replaceState({}, '', url);
              }
            }"
          x-init="updateUrl()"
          x-effect="updateUrl()"
          class="mt-6"
        >
          <div class="sm:w-max p-1 rounded bg-gray-100 flex">
            <x-ui.tab value="overview" x-model="tab">Visão</x-ui.tab>
            <x-ui.tab value="posts" x-model="tab">Posts</x-ui.tab>
            <x-ui.tab value="drafts" x-model="tab">Rascunhos</x-ui.tab>
          </div>
            
          <div class="mt-6">
            <x-blog.tabs.overview :$statistics :$groupedActivities :$activities/>
            <x-blog.tabs.posts :$posts/>
            <x-blog.tabs.drafts/>
          </div>
        </div>
      </div>
    </x-section>
  </div>
</x-layout>
