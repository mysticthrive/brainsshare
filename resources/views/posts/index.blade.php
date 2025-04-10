<x-layout>
  <section class="py-20 px-5 bg-blue-50">
    <div class="max-w-[600px] mx-auto">
      <div class=" text-center space-y-4">
        <h1 class="text-5xl font-black text-blue-950 md:text-6xl">Descubra o futuro da tecnologia</h1>
        <p class="text-lg font-medium text-blue-800">Insights, tutorials, and news from the cutting edge of tech innovation</p>
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
        <span class="px-4 py-2 border border-blue-100 rounded-3xl text-sm font-medium text-blue-600 bg-white">Mais de 1.000 artigos</span>
        <span class="px-4 py-2 border border-blue-100 rounded-3xl text-sm font-medium text-blue-600 bg-white">Atualizado diariamente</span>
        <span class="px-4 py-2 border border-blue-100 rounded-3xl text-sm font-medium text-blue-600 bg-white">Especialistas</span>
      </div>
    </div>
  </section>
</x-layout>