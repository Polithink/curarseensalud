var prevScrollpos = window.pageYOffset;

window.onscroll = function() {

    var navBar = document.getElementById('header__nav');

    var currentScrollPos = window.pageYOffset;

    if (prevScrollpos > currentScrollPos) {
        // show the menu
        
        setTimeout(function(){
            navBar.style.top = "0";
        },.1);

    } else {
        // hide menu
        navBar.style.top = "-100px";

    }

    prevScrollpos = currentScrollPos;
}

const menu = document.querySelector('nav');
  // console.log(menu);
  const burgerButton = document.querySelector('#burger-menu');
  // console.log(burgerButton);

  burgerButton.addEventListener('click', hideShow)
    
  
  function hideShow() {

    if (menu.classList.contains('is-active')) {
      menu.classList.remove('is-active');
    } else {
      menu.classList.add('is-active');
    }

    if (burgerButton.classList.contains('is-active')) {
      burgerButton.classList.remove('is-active');
    } else {
      burgerButton.classList.add('is-active');
    }

  }