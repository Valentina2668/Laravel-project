document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('navbar-toggle');
    const searchButton = document.getElementById('search-toggle');
    const menu = document.getElementById('navbar');

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



// let searchForm = document.querySelector('.header .search-form');

// document.querySelector('#search-btn').onclick = () => {
//     searchForm.classList.toggle('active');
//     navbar.classList.remove('active');
// }
// let navbar = document.querySelector('.header .navbar');

// document.querySelector('#menu-btn').onclick = () => {
//     navbar.classList.toggle('active');
//     searchForm.classList.remove('active');
   
// }
// window.onscroll = () => {
//     searchForm.classList.remove('active');
//     navbar.classList.remove('active');
// }