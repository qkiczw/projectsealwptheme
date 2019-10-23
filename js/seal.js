console.log('JS Works!!!');
const hamburger = document.querySelector('.hamburger');
const mainMenu = document.querySelector('.menu');
const polyLangBtn = document.querySelector('.pll-parent-menu-item');
const polyLangSubMenu = document.querySelector('.sub-menu');

// const handleHamburgerClick = () => {
//     hamburger.classList.toggle('hamburger--active');
//     mainMenu.classList.toggle('menu--hidden');
//     console.log('Menu is Open');
// }

// hamburger.addEventListener('click', handleHamburgerClick);
// polyLangBtn.addEventListener('click', () => {
//     polyLangSubMenu.classList.toggle('sub-menu-open');
// })

// triangle animations //
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
    const $partnersRow = $('.partners-row');
    const $window = $(window);
 
    function partnersShow() {
        if($window.scrollTop() > 1200) {
            $partnersRow.animate({opacity: 1}, 1300);
        } 
    }
    $window.on('scroll', partnersShow);
})