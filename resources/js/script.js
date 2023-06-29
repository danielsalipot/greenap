var swiper = new Swiper(".slide-container", {
    slidesPerView: 4,
    spaceBetween: 20,
    sliderPerGroup: 4,
    centerSlide: "true",
    loop: true,
    fade: "true",
    grabCursor: "true",
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 1,
        },
        1100:{
            slidesPerView: 2
        },
        1280: {
            slidesPerView: 4,
        },
    },
});

var swiper = new Swiper(".slide-container-ft", {
    slidesPerView: 1,
    loop: true,
    spaceBetween: 20,
    sliderPerGroup: 4,
    centerSlide: "true",
    fade: "true",
    grabCursor: "true",
    pagination: {
        el: ".swiper-pagination-ft",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});





