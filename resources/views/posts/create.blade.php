<x-layout>
  <x-section>
    <div class="mb-12 space-y-2">
      <h1 class="text-3xl font-black text-gray-900 md:text-4xl lg:text-5xl">Criar novo post</h1>
      <p class="text-gray-600">Preencha os campos abaixo para publicar um novo post.</p>
    </div>

    <form action="/admin/posts" method="POST" enctype="multipart/form-data" class="space-y-8">
      @csrf
      <div class="flex flex-col gap-6 md:flex-row">
        <div class="space-y-6 flex-1">
          <x-ui.forms.input name="title" label="Titulo" placeholder="O que esperar da tecnologia em..."/>
          <x-ui.forms.input 
            name="excerpt" 
            label="Resumo" 
            as="textarea" 
            placeholder="Resumo"
            tip="Um pequeno resumo que é exibido no card do post (opcional)"
          />

          <x-ui.forms.select name="category_id" label="Categoria" :options="$categories" placeholder="Selecione a categoria"/>

          <x-ui.forms.input 
            name="tags"
            label="Tags"
            placeholder="frontend, web, tailwind..."
            tip="Separe as tags por virgula"
          />
          <x-ui.forms.file-dropzone name="image"/>
        </div>
  
        <div class="flex-1 space-y-6">
          <x-ui.forms.input name="content" label="Conteúdo" as="textarea"/>
          
          <div class="space-y-4">
            <x-ui.forms.checkbox 
              name="published"
              label="Publicado"
              tip="Torna o post visivel para todos"
            />

            <x-ui.forms.checkbox 
              name="featured" 
              label="Destaque"
              tip="Exibe o post em destaque na página inicial"
            />
          </div>
        </div>
      </div>
      <x-ui.forms.button class="w-full ml-auto md:w-auto">Publicar</x-ui.forms.button>
    </form>
  </x-section>
  
  @push('scripts')
    <script src="https://cdn.tiny.cloud/1/3qqrdxghokajgnwrpufmupg41lyo1e5llr6bymftc3btdx6v/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="module" src="{{ Vite::asset('resources/js/editors/tinymce.js') }}"></script>
  @endpush
</x-layout>

