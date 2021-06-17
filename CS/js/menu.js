$(document).ready(enableMobileMenu);

function enableMobileMenu(){

  var menuButton = $('.menu-button');
  var menu = $('header nav');

  function toggleMenu(){
    menu.toggleClass('hide-on-mobile');
  }

  menuButton.click(toggleMenu);
}
