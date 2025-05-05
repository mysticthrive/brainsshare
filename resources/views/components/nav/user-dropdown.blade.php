<div class="hidden md:block">
  <div class="ml-4 flex items-center md:ml-6">
    <div
      class="relative ml-3"
      onmouseenter="clearTimeout(window.dropdownTimeout); showDropdown()" 
      onmouseleave="hideDropdownWithDelay()"
    >
      <div>
        <button
          type="button"
          class="relative flex max-w-xs items-center rounded-full cursor-pointer bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-none"
          id="user-menu-button"
        >
          <span class="sr-only">Abrir menu do usuário</span>
          <img class="size-8 rounded-full" src="https://avatar.iran.liara.run/public/boy" alt="">
        </button>
      </div>

      <div
        id="user-dropdown"
        class="absolute right-0 mt-2 w-48 rounded-md bg-white shadow-md ring-1 ring-black/5 origin-top-right
               opacity-0 scale-95 pointer-events-none
               transition-all duration-200 ease-in-out overflow-hidden"
      >
        <a href="#" class="block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors">Perfil</a>
        <a href="#" class="block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors">Dashboard</a>
        <form action="/logout" method="POST">
          @csrf
          @method('DELETE')
          <button class="block w-full text-left px-4 py-2 text-sm cursor-pointer text-gray-700 hover:bg-gray-100 transition-colors">Sair</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  const dropdown = document.getElementById('user-dropdown');

  function showDropdown() {
    dropdown.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
    dropdown.classList.add('opacity-100', 'scale-100', 'pointer-events-auto');
  }

  function hideDropdownWithDelay() {
    window.dropdownTimeout = setTimeout(() => {
      dropdown.classList.remove('opacity-100', 'scale-100', 'pointer-events-auto');
      dropdown.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
    }, 200);
  }
</script>
