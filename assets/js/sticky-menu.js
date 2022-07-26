'use strict';

let nav = document.querySelector('.header-container');

window.addEventListener('scroll', function() {
    nav.classList.toggle('sticky', window.scrollY > 55);
});