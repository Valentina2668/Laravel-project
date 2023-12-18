document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('navbar-toggle');
    const searchButton = document.getElementById('search-toggle');
    const menu = document.getElementById('navbar-search');

    searchButton.addEventListener('click', function (){
        menu.classList.toggle('hidden');
    });

    button.addEventListener('click', function () {
        menu.classList.toggle('hidden');
    });
});
let slides = document.querySelectorAll('.home .slide');
let index = 0;
function next(){
    slides[index].classList.remove('active');
    index = (index+1)% slides.length;
    slides[index].classList.add('active');
}
function prev(){
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length)% slides.length;
    slides[index].classList.add('active');
}