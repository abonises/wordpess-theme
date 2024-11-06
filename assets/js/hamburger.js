const hamburger = document.querySelector('.hamburger');
const modalMenu = document.querySelector('.modal-menu');
const closeMenuButton = document.querySelector('.close-menu');
const navItems = document.querySelectorAll('.modal-nav-list__item');

function toggleMenu() {
  const isOpen = modalMenu.style.display === 'flex';
  
  modalMenu.style.display = isOpen ? 'none' : 'flex';
  
  hamburger.classList.toggle('active', !isOpen);
}

hamburger.addEventListener('click', toggleMenu);

closeMenuButton.addEventListener('click', function() {
  modalMenu.style.display = 'none';
  hamburger.classList.remove('active');
});

navItems.forEach(item => {
  item.addEventListener('click', function() {
    modalMenu.style.display = 'none';
    hamburger.classList.remove('active');
  });
});
