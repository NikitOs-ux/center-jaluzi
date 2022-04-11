// главный слайдер
new Swiper('.swiper',{
    spaceBetween: 30,
    speed: 500,
    loop: true,
    grabCursor: true,
    autoplay:{
        delay: 10000,
        disableOnInteraction: true  , 
    }, 
    effect: 'coverflow',
    pagination: {
        el: '.swiper-pagination',
        clickable: true, 
        dynamicBullets: true, 
      },
      keyboard:{
          enabled: true,
          onlyInViewport: true,
      } 
})

// слайдер типов 
new Swiper('.type-swiper', {
    grabCursor: true,
    breakpoints:{
        1024:{
            centeredSlides: true,
            slidesPerView: 'auto',
            initialSlide: 1,
        },
        300:{
            slidesPerView: 1,
        }
    },
    scrollbar: {
        el: '.swiper-scrollbar',
        draggable: true,
      },
    
})

