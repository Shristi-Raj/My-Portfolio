const header = document.querySelector("header");
window.addEventListener("scroll", function(){
    header.classList.toggle("sticky" , window.scrollY > 0);
});

let menu = document.querySelector('#menu-icon');
let sidebar = document.querySelector('.sidebar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    sidebar.classList.toggle('active');
};

window.onscroll = () => {
    menu.classList.remove('bx-x');
    sidebar.classList.remove('active');
};

const sr = ScrollReveal ({
    distance: '45px',
    duration: 2700,
    reset: true
})

sr.reveal('.home-text' ,{delay:350,origin:'left'})
sr.reveal('.home-img' ,{delay:350,origin:'right'})

sr.reveal('.about,.skills,.portfolio,.contact' ,{delay:200,origin:'bottom'})