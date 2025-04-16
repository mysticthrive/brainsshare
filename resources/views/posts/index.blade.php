<x-layout>
  <section class="py-20 px-5 bg-blue-50">
    <div class="max-w-[640px] mx-auto">
      <div class=" text-center space-y-4">
        <h1 class="text-5xl font-black text-blue-950 md:text-6xl">Descubra o futuro da tecnologia</h1>
        <p class="text-lg font-medium text-blue-800 md:text-xl">Insights, tutorials, and news from the cutting edge of tech innovation</p>
      </div>
  
      <form action="" class="mt-8 mb-16 flex gap-2">
        <div class="relative flex-1">
          <svg 
          class="absolute w-5 h-5 text-blue-400 transform -translate-y-1/2 left-3 top-1/2" 
          xmlns="http://www.w3.org/2000/svg" 
          fill="none" 
          viewBox="0 0 24 24" 
          stroke="currentColor"
          >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        
          <input
          type="search"
          placeholder="Procure artigos, topicos, ou autores..."
          class="w-full pl-10 pr-3 h-12 border border-blue-300 border-brand-200 rounded-md bg-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none transition-colors"
          />
        </div>
  
        <button class="px-6 h-12 rounded-md text-white font-medium bg-blue-600 cursor-pointer">Buscar</button>
      </form>
  
      <div class="flex item-center flex-wrap justify-center gap-2">
        <x-ui.badge variant="white">Mais de 1.000 artigos</x-ui.badge>
        <x-ui.badge variant="white">Atualizado diariamente</x-ui.badge>
        <x-ui.badge variant="white">Especialistas</x-ui.badge>
      </div>
    </div>
  </section>

  <section class="max-w-[1200px] py-16 px-5 mx-auto">
    <h2 class="mb-8 text-3xl font-bold">Trending topics</h2>

    <div class="flex item-center flex-wrap gap-3">
      <x-ui.badge href="#">Inteligencia artificial (48)</x-ui.badge>
      <x-ui.badge href="#">Desenvolvimento web (19)</x-ui.badge>
      <x-ui.badge href="#">Segurança (30)</x-ui.badge>
      <x-ui.badge href="#">Cloud (27)</x-ui.badge>
      <x-ui.badge href="#">Ciencia de dados (18)</x-ui.badge>
      <x-ui.badge href="#">UX/UI Design (18)</x-ui.badge>
    </div>
  </section>

  <section class="max-w-[1200px] py-16 px-5 mx-auto">
    <div class="mb-8 flex items-center justify-between">
      <h2 class="text-3xl font-bold">Artigos recentes</h2>
      <a href="" class="text-sm font-medium text-gray-700">Ver todos →</a>
    </div>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      <x-blog.post.card/>
      <x-blog.post.card/>
      <x-blog.post.card/>
      <x-blog.post.card/>
      <x-blog.post.card/>
      <x-blog.post.card/>
    </div>
  </section>

  <section class="max-w-[1200px] py-16 px-5 mx-auto border-t border-gray-200">
    <div class="mb-8 flex items-center justify-between">
      <h2 class="text-3xl font-bold">Mais lidos da semana</h2>
    </div>

    <div class="grid gap-6 sm:grid-cols-2">
      <x-blog.post.list-item/>
      <x-blog.post.list-item/>
      <x-blog.post.list-item/>
      <x-blog.post.list-item/>
    </div>
  </section>

  <section class="max-w-[1200px] py-16 px-5 mx-auto border-t border-gray-200">
    <div class="mb-8 flex items-center justify-between gap-4">
      <h2 class="text-3xl font-bold">Escolha do editor</h2>
      <x-ui.badge variant="blue" small>Conteúdo selecionado</x-ui.badge>
    </div>

    <div class="grid gap-6 md:grid-cols-3">
      <x-blog.post.card compact/>
      <x-blog.post.card compact/>
      <x-blog.post.card compact/>
    </div>
  </section>

  <section class="max-w-[1200px] py-16 px-5 mx-auto border-t border-gray-200">
    <div class="mb-8 flex items-center justify-between gap-4">
      <h2 class="text-3xl font-bold">Noticias de tecnologia</h2>
      <a href="" class="text-sm font-medium text-blue-600 shrink-0">Mais noticias →</a>
    </div>

    <div class="grid gap-6">
      <x-blog.news.card/>
      <x-blog.news.card/>
      <x-blog.news.card/>
    </div>
  </section>

  <section class="max-w-[1200px] py-16 px-5 mx-auto border-t border-gray-200">
    <div class="mb-8 flex items-center justify-between gap-4">
      <h2 class="text-3xl font-bold">Recursos gratuitos</h2>
    </div>

    <div class="grid gap-6 md:grid-cols-3">
      <x-blog.resource.card/>
      <x-blog.resource.card/>
      <x-blog.resource.card/>
    </div>
  </section>

  <section class="max-w-[1200px] py-16 px-5 mx-auto">
    <div class="p-10 rounded-xl text-center bg-blue-50">
      <div class="max-w-xl mx-auto">
        <div class="space-y-4">
          <h2 class="text-3xl font-black text-blue-900">Fique por dentro</h2>
          <p class="text-blue-800">Get the latest articles, tutorials, and tech news delivered straight to your inbox.</p>
        </div>

        <form action="" class="mt-8 mb-4 flex flex-col gap-3 md:flex-row">
          <input type="text" class="w-full py-2 px-3 rounded border text-sm font-medium border-blue-200 bg-white" placeholder="Digite seu email">
          <button class="w-full py-2 px-5 rounded text-sm font-bold text-white bg-blue-600 sm:w-auto">Inscrever</button>
        </form>

        <p class="text-xs text-blue-600">By subscribing, you agree to our Privacy Policy and consent to receive updates from our company.</p>
      </div>
    </div>
  </section>
</x-layout>