'use strict';

const showMoreBox = document.getElementById('js--show-more');
const showMoreButton = document.getElementById('js--show-more-button');
const listaEspecialidades = document.querySelector('.single-directorio-lista-especialidades');

showMoreBox.addEventListener('click', showListaEspecialidades);

function showListaEspecialidades() {
    listaEspecialidades.classList.toggle('active');
    showMoreButton.classList.toggle('spin-icon');
}