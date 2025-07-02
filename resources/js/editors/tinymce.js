tinymce.init({
  selector: '#content',
  language: 'pt_BR',
  language_url: '/js/lang/pt_BR.js',
  menubar: false,
  plugins: [
    'fullscreen', 'placeholder', 'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'lists', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount'
  ],
  placeholder: 'Escreva aqui o conteúdo do post...',
  toolbar: 'styles | bold italic underline strikethrough | numlist bullist | outdent indent | fullscreen link image ',
  branding: false
});