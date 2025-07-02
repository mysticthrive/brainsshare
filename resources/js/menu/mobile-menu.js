document.addEventListener('DOMContentLoaded', function() {
  const menuButton = document.querySelector('#menu-button');
  const mobileMenu = document.querySelector('#mobile-menu');
  const openIcon = menuButton.querySelector('#open-icon');
  const closeIcon = menuButton.querySelector('#close-icon');

  function toggleMenu() {
    mobileMenu.classList.toggle('hidden');
    
    openIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
    
    const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
    menuButton.setAttribute('aria-expanded', !isExpanded);
  }

  menuButton.addEventListener('click', toggleMenu);
});