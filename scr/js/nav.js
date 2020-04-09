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