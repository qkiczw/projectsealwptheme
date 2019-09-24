console.log('JS Works!!!');
const hamburger = document.querySelector('.hamburger');
const mainMenu = document.querySelector('.menu');
const polyLangBtn = document.querySelector('.pll-parent-menu-item');
const polyLangSubMenu = document.querySelector('.sub-menu');

const handleHamburgerClick = () => {
    hamburger.classList.toggle('hamburger--active');
    mainMenu.classList.toggle('menu--hidden');
    console.log('Menu is Open');
}

hamburger.addEventListener('click', handleHamburgerClick);
polyLangBtn.addEventListener('click', () => {
    polyLangSubMenu.classList.toggle('sub-menu-open');
})