<x-layout>
  <section class="py-20 px-5 bg-blue-50">
    <div class="max-w-[640px] mx-auto">
      <div class=" text-center space-y-4">
        <h1 class="text-5xl font-black text-blue-950 md:text-6xl">Descubra o futuro da tecnologia</h1>
        <p class="text-lg font-medium text-blue-800 md:text-xl">Insights, tutorials, and news from the cutting edge of tech innovation</p>
      </div>
  
      <form action="" class="mt-8 mb-16 flex gap-2">
        <div class="relative flex-1">
          <img src="{{ asset('images/icons/search.svg') }}" class="absolute w-5 h-5 text-blue-400 transform -translate-y-1/2 left-3 top-1/2" alt="">
          <x-ui.forms.input name="search" placeholder="Procure artigos, topicos, ou autores..." icon/>
        </div>
  
        <x-ui.forms.button>Buscar</x-ui.forms.button>
      </form>
  
      <div class="flex item-center flex-wrap justify-center gap-2">
        <x-ui.badge variant="white">Mais de 1.000 artigos</x-ui.badge>
        <x-ui.badge variant="white">Atualizado diariamente</x-ui.badge>
        <x-ui.badge variant="white">Especialistas</x-ui.badge>
      </div>
    </div>
  </section>

  <section class="max-w-[1200px] py-16 px-5 mx-auto">
    <x-section-heading>Trending Topics</x-section-heading>

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
    <x-section-heading link="#">Artigos recentes</x-section-heading>

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
    <x-section-heading>Mais lidos da semana</x-section-heading>

    <div class="grid gap-6 sm:grid-cols-2">
      <x-blog.post.list-item/>
      <x-blog.post.list-item/>
      <x-blog.post.list-item/>
      <x-blog.post.list-item/>
    </div>
  </section>

  <section class="max-w-[1200px] py-16 px-5 mx-auto border-t border-gray-200">
    <x-section-heading link="#">Escolha do editor</x-section-heading>

    <div class="grid gap-6 md:grid-cols-3">
      <x-blog.post.card compact/>
      <x-blog.post.card compact/>
      <x-blog.post.card compact/>
    </div>
  </section>

  <section class="max-w-[1200px] py-16 px-5 mx-auto border-t border-gray-200">
    <x-section-heading link="#">Noticias de tecnologia</x-section-heading>

    <div class="grid gap-6">
      <x-blog.news.card/>
      <x-blog.news.card/>
      <x-blog.news.card/>
    </div>
  </section>

  <section class="max-w-[1200px] py-16 px-5 mx-auto border-t border-gray-200">
    <x-section-heading link="#">Recursos gratuitos</x-section-heading>


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
          <x-ui.forms.input name="email" placeholder="Digite seu email"/>
          <x-ui.forms.button>Inscrever</x-ui.forms.button>
        </form>

        <p class="text-xs text-blue-600">By subscribing, you agree to our Privacy Policy and consent to receive updates from our company.</p>
      </div>
    </div>
  </section>
</x-layout>