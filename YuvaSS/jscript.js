let menuBtn = document.querySelector('.fa-bars');
let menuShow = document.querySelector('.menu');

menuBtn.addEventListener('click',function(){
    menuShow.classList.toggle('menu-open');
    menuBtn.classList.toggle('fa-window-close')
})
