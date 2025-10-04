AOS.init();

// Hide preloader after page loads
// window.addEventListener("load", function() {
//     document.getElementById("preloader").style.display = "none";
// });

//Technology Feature Slider
const swiper = new Swiper(".swiper-slider", {
    // Optional parameters
    centeredSlides: true,
    slidesPerView: 1,
    grabCursor: true,
    freeMode: false,
    loop: true,
    mousewheel: true,
    keyboard: {
        enabled: true
    },

    // Enabled autoplay mode
    autoplay: {
        delay: 3000,
        disableOnInteraction: false
    },

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
        clickable: true
    },

    // If we need navigation
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // Responsive breakpoints
    breakpoints: {
        481: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        769: {
            slidesPerView: 1.25,
            spaceBetween: 20
        },
        1024: {
            slidesPerView: 1.25,
            spaceBetween: 20
        }
    }
});

if( $("#fund_security").length > 0 ){
    const box = document.getElementById("scroll_box");
    const img_doller = document.getElementById("img_doller");
    const img_euro = document.getElementById("img_euro");
    const img_pound = document.getElementById("img_pound");

    const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                img_doller.classList.remove("img-doller-move-out");
                img_euro.classList.remove("img-euro-move-out");
                img_pound.classList.remove("img-pound-move-out");
                img_doller.classList.add("img-doller-move-in");
                img_euro.classList.add("img-euro-move-in");
                img_pound.classList.add("img-pound-move-in");
            } else {
                img_doller.classList.remove("img-doller-move-in");
                img_euro.classList.remove("img-euro-move-in");
                img_pound.classList.remove("img-pound-move-in");
                img_doller.classList.add("img-doller-move-out");
                img_euro.classList.add("img-euro-move-out");
                img_pound.classList.add("img-pound-move-out");
            }
        });
    },
    {
        threshold: 0.8 // Trigger when 50% of the box is visible
    }
    );

    observer.observe(box);
}

$(document).ready(function() {
    $('.openLiveAccount').on('click', function() {
        window.open('https://cabinet.zedcapital.mu/register', '_blank');
    });
});

$(document).ready(function() {
    $('.loginLiveAccount').on('click', function() {
        window.open('https://cabinet.zedcapital.mu/login', '_blank');
    });
});

$(document).ready(function() {
    $('.zedAcademyOpen').on('click', function() {
        window.open(url+'zed-academy.php', '_blank');
    });
});