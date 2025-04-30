<x-layout>
  <section class="max-w-[1100px] mx-auto py-8 px-5 md:py-14 lg:py-20">
    <div class="mb-12 space-y-2">
      <h1 class="text-3xl font-black text-gray-900 md:text-4xl lg:text-5xl">Criar novo post</h1>
      <p class="text-gray-600">Preencha os campos abaixo para publicar um novo post.</p>
    </div>

    <form action="/posts" method="POST" enctype="multipart/form-data" class="space-y-8">
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

          <x-ui.forms.select name="category" label="Categoria" :options="$categories"/>

          <x-ui.forms.input 
            name="tags"
            label="Tags"
            placeholder="frontend, web, tailwind..."
            tip="Separe as tags por virgula"
          />
          <x-ui.forms.file-dropzone name="image"/>
        </div>
  
        <div class="flex-1 space-y-6">
          <div>
            <label class="mb-2 font-medium inline-block" for="content">Conteúdo</label>
            <textarea id="content" name="content"></textarea>
          </div>
          
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
  </section>
</x-layout>

<script>
  tinymce.init({
    selector: '#content',
    language: 'pt_BR',
    language_url: '/js/lang/pt_BR.js',
    menubar: false,
    plugins: [
      'placeholder', 'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount'
    ],
    placeholder: 'Escreva aqui o conteúdo do post...',
    toolbar: 'styles | bold italic underline strikethrough | outdent indent | link image',
    branding: false
  });
</script>
