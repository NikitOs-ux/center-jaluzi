let hideHead = document.querySelector('.header-hide');
let head = document.querySelector('.header');

hideHead.addEventListener('click',()=>{
    head.classList.toggle('header-active')
})
