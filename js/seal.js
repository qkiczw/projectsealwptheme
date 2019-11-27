console.log('JS Works!!!');
const hamburger = document.querySelector('.hamburger');
const mainMenuItems = document.querySelector('.main-menu__items');
const mainMenu = document.querySelector('.main-menu');

const handleHamburgerClick = () => {
    console.log('Menu is Open');
    mainMenuItems.classList.toggle('main-menu__items--showed');
    mainMenu.classList.toggle('main-menu--showed');
    hamburger.classList.toggle('hamburger--active');
    
}
hamburger.addEventListener('click', handleHamburgerClick);

// triangle animations
const traingleLeft = document.querySelector('.triangle-left-side');
const traingleRight = document.querySelector('.triangle-right-side');
const scrollFromTop = window.scrollY;
console.log('pozycja Y:', scrollFromTop);

const traingleLeftAnimation = ()=> {
    const scrollFromTop = window.scrollY;
    console.log('pozycja Y:', scrollFromTop);
    if( scrollFromTop > 400 && scrollFromTop < 2500) {

        traingleLeft.classList.add('traingle-left-visible');
    }
    else{
        traingleLeft.classList.remove('traingle-left-visible');
    }
}

const traingleRightAnimation = ()=> {
    const scrollFromTop = window.scrollY;
    console.log('pozycja Y:', scrollFromTop);
    if( scrollFromTop > 1200 && scrollFromTop < 3000) {
        traingleRight.classList.add('traingle-right-visible');
    }
    else{
        traingleRight.classList.remove('traingle-right-visible');
    }
}
window.addEventListener('scroll', traingleLeftAnimation);
window.addEventListener('scroll', traingleRightAnimation);

jQuery(document).ready(function( $ ){
    const $partnersRow = $('.partners__row');
    const $window = $(window);
    const $socialIcons = $('.header__social-icons');
 
    function partnersShow() {
        if($window.scrollTop() > 1200) {
            $partnersRow.animate({opacity: 1}, 1300);
        } 
    }
    $window.on('scroll', partnersShow);
    $socialIcons.animate({left: '0', opacity: '1'}, 600);
})