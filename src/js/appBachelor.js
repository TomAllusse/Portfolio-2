/* BACHELOR */

const ulContainers = document.querySelectorAll('#reseaux ul, #dev ul');
const debouches = document.querySelectorAll('.debouches');

debouches.forEach((div, index) => {
    const correspondantUl = ulContainers[index];

    div.addEventListener('mouseenter', () => {
        div.classList.replace('is-visible', 'is-invisible');
        
        if (correspondantUl) {
            correspondantUl.classList.replace('is-invisible', 'is-visible');
        }
    });

    if (correspondantUl) {
        correspondantUl.addEventListener('mouseleave', () => {
            correspondantUl.classList.replace('is-visible', 'is-invisible');
            div.classList.replace('is-invisible', 'is-visible');
        });
    }
});