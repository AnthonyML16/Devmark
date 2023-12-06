/* Header scroll color change */
let Header = document.querySelector('header');

window.addEventListener('scroll', () => {
    Header.classList.toggle('shadow', window.scrollY > 0);
});

/* Menu */
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}

/* Remove menu on scroll */
window.onscroll = () => {
    menu.classList.remove('bx-x');
    navbar.classList.remove('active');
}