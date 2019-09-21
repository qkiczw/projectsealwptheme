console.log('JS Works!!!');
const hamburger = document.querySelector('.hamburger');
const mainMenu = document.querySelector('.menu');

const handleHamburgerClick = () => {
    hamburger.classList.toggle('hamburger--active');
    mainMenu.classList.toggle('menu--hidden');
    console.log('Menu is Open');
}

hamburger.addEventListener('click', handleHamburgerClick);