
const testimomialSwiper = new Swiper(".testimomialSwiper", {
    grabCursor: true,
    slidesPerView: 3,
    centeredSlides: true,
    loop: true,
    spaceBetween: 20,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});


const marqueeTestimomialSwiper = new Swiper('.marqueeTestimomialSwiper', {
    direction: 'vertical',
    loop: true,
    slidesPerView: 'auto',
    freeMode: true,
    speed: 20000,
    loop: true,
    autoplay: {
        delay: 1,
        disableOnInteraction: true,
    },
});