$(document).ready(function() {
  const mobileMenuButton = $('#mobileMenuButton');

  function toggleMobileMenu() {
    const mainMenu = $('#main-menu');
    if (mainMenu.css( "display" ) === 'none') {
      mobileMenuButton.addClass( 'open' );
    } else {
      mobileMenuButton.removeClass( 'open' );
    }

    mobileMenuButton.find('.svg-open').toggle();
    mobileMenuButton.find('.svg-close').toggle();
    mainMenu.toggle();
  }

  mobileMenuButton.click(function() {
    toggleMobileMenu();
  });
});