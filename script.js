
const menuHamburger = document.querySelector(".menu-hamburger")
const navLinks = document.querySelector(".nav-links")
const Titre = document.querySelector("header .titre")
 
menuHamburger.addEventListener('click',()=>{
    navLinks.classList.toggle('mobile-menu')
    })

navLinks.addEventListener('click', () => {
    navLinks.classList.toggle('mobile-menu');
    });

menuHamburger.addEventListener('click', () => {
    Titre.classList.toggle('mobile-menu');
    });

navLinks.addEventListener('click', () => {
    Titre.classList.toggle('mobile-menu');
    });