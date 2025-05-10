<x-layout>
  <section class="max-w-[800px] mx-auto py-8 px-5 md:py-14 lg:py-20">
    <x-page-heading title="Entrar" subtitle="Preencha os campos abaixo para entrar na sua conta."/>

    <form action="/login" method="POST" class="space-y-8">
      @csrf
      <div class="space-y-6">
        <x-ui.forms.input type="email" name="email" label="Email" placeholder="johndoe@email.com"/>
        <x-ui.forms.input type="password" name="password" label="Senha" placeholder="Digite sua senha"/>
      </div>
      <x-ui.forms.button>Entrar</x-ui.forms.button>
    </form>
  </section>
</x-layout>