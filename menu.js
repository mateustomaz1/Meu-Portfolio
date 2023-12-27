
let btnMenu = document.getElementById('btn-menu')
let menu = document.getElementById('menu-mobile')
let overlay = document.getElementById('overlay-menu')

btnMenu.addEventListener('click', ()=>{
    menu.classList.add('abrir-menu')
})

menu.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
})

overlay.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
})

function fecharFormulario() {
    var formulario = document.getElementById("form-contato");
    formulario.classList.remove("show-form");

    var overlayMenu = document.getElementById("overlay-menu");
    overlayMenu.classList.remove("show-overlay");
}

document.addEventListener('DOMContentLoaded', function () {
    const btnForm = document.getElementById('btn-form');
    const formContato = document.getElementById('form-contato');
    const overlayMenu = document.getElementById('overlay-menu');

    btnForm.addEventListener('click', function () {
        formContato.classList.toggle('show-form');
        overlayMenu.classList.toggle('show-overlay');
    });

    overlayMenu.addEventListener('click', function () {
        formContato.classList.remove('show-form');
        overlayMenu.classList.remove('show-overlay');
    });
});
