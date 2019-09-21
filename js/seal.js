console.log('JS Works!!!');
const hamburger = document.querySelector('.hamburger');

const handleHamburgerClick = () => {
    hamburger.classList.toggle('hamburger--active');
    console.log('Menu is Open');
}

hamburger.addEventListener('click', handleHamburgerClick);