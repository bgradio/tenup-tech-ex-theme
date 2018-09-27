document.addEventListener("DOMContentLoaded", function() {
  const mobileMenuButton = document.querySelector('#mobileMenuButton');

  function toggleMobileMenu() {
    const mainMenu = document.querySelector('#main-menu');

    if ( mainMenu.style.display === 'none' || mainMenu.style.display === '' ) {
      mobileMenuButton.querySelector('.svg-open').style.display = 'none';
      mobileMenuButton.querySelector('.svg-close').style.display = 'block';

      mainMenu.style.display = "block";
      mobileMenuButton.classList.add('open');
    } else {
      mobileMenuButton.querySelector('.svg-open').style.display = 'block';
      mobileMenuButton.querySelector('.svg-close').style.display = 'none';
      mobileMenuButton.classList.remove('open');

      mainMenu.style.display = "none";
      mobileMenuButton.classList.remove('open');
    }
  }

  mobileMenuButton.onclick = function() {
    toggleMobileMenu();
  }
});
