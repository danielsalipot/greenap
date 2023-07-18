var swiper = new Swiper(".slide-container", {
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
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
    autoplay: {
        delay: 7000,
        disableOnInteraction: false,
    },
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
})


//scroll to top button
var toTopButton = document.getElementById("to-top-button");

if (toTopButton) {
    window.onscroll = function() {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            toTopButton.classList.remove("hidden");
        } else {
            toTopButton.classList.add("hidden");
        }
    };
    window.goToTop = function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    };
}

const bg = document.querySelector(".bg")
document.addEventListener('DOMContentLoaded', (e)=>{
    setTimeout(() => {
        bg.classList.add('display-none')
    }, 4000)
})






