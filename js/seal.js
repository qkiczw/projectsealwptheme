console.log('JS Works!!!');
const hamburger = document.querySelector('.hamburger');
const navLogo = document.querySelector('.header__nav__logo__image');
const mainMenu = document.querySelector('.header__nav__items__mobile__item');
const polyLangMenu = document.querySelector('.sub-menu');
const polyLangMenuSwitcher = document.querySelector('.pll-parent-menu-item');
const screenWidth = screen.width;
const screenWidthMax = 500;


const handleLaguageSwitcher = () => {
    console.log('Language Menu is Opened')
    polyLangMenu.classList.toggle('sub-menu--active-desktop');
}
// polyLangMenuSwitcher.addEventListener('click', handleLaguageSwitcher); // Disable for now

const handleHamburgerClick = () => {
    hamburger.classList.toggle('hamburger--active');
    mainMenu.classList.toggle('header__nav__items__mobile__item--active');

    if(screenWidth < screenWidthMax){
        navLogo.classList.toggle('header__nav__logo__image--hidden');
    }
}
hamburger.addEventListener('click', handleHamburgerClick);  // Disable for now




jQuery(document).ready(function( $ ){
    const $aboutUsShortInfo = $('.about-us__short-info');
    const $disclaimer = $('.disclaimer');
    const $partnersRow = $('.partners__row');
    const $fpGalleries = $('.fp-galleries__content');
    const $window = $(window);
    const $socialIcons = $('.header__social-icons');
    const $windowWitdth = $window.width();
    const $minWindowWidth = 1200;
    

    function aboutUsShow() {
        if($window.scrollTop() >= 300) {
            $aboutUsShortInfo.animate({left: 0, opacity: 1}, 1000);
        }
    }
    $window.on('scroll', aboutUsShow);

    function disclaimerShow() {
        if($window.scrollTop() >= 750) {
            $disclaimer.animate({left: 0, opacity: 1}, 1000);
        }
    }
    $window.on('scroll', disclaimerShow);
 
    function partnersShow() {
        if($window.scrollTop() > 1200) {
            $partnersRow.animate({opacity: 1}, 750);
        } 
        console.log($window.scrollTop()); // only for test to show sroll height
    }
    $window.on('scroll', partnersShow);

    function $fpGalleriesShow() {
        if($window.scrollTop() >= 2800) {
            $fpGalleries.animate({top:0, opacity: 1}, 1000);
        }
    }
    $window.on('scroll', $fpGalleriesShow);

    $socialIcons.animate( {bottom: '15px', opacity: '1'}, 600);

    //test
    if($windowWitdth > $minWindowWidth ){
        $socialIcons.animate( {bottom: '20px', opacity: '1'}, 600);
    }
    else{
        $socialIcons.animate( {bottom: '15px', opacity: '1'}, 600);
    }
});