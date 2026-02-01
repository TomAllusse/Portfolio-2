/* NAVBAR */
const menu = document.querySelector('.list-nav');
const navBar = document.querySelector('nav');
const btnBurgerActive = document.querySelector('.active');
const btnBurgerInactive = document.querySelector('.inactive');
const btnMenu = document.querySelector('.btn-toggle-container');

if (btnMenu && menu) {
    btnMenu.addEventListener('click', function(){
        menu.classList.toggle('active-menu');
        navBar.classList.toggle('active-menu');
        btnBurgerActive.classList.toggle('active-menu');
        btnBurgerInactive.classList.toggle('active-menu');
    })
}