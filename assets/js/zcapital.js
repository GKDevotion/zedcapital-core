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

if( $('#pivot_point_calculator_form').length > 0 ){
    $('#pivot_point_calculator_form').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: "https://www.zedcapital.mu/pivot-point-calculator",
            method: "POST",
            data: $(this).serialize(),
            success: function(response) {
                // Standard Pivot Points
                $(".result").removeClass('d-none');
                $('#standardPivotPoint').html('<b>Pivot Point:</b> ' + response.standard.pivotPoint);
                $('#standardR1').html('<b>Resistance 1:</b> ' + response.standard.r1);
                $('#standardS1').html('<b>Support 1:</b> ' + response.standard.s1);
                $('#standardR2').html('<b>Resistance 2:</b> ' + response.standard.r2);
                $('#standardS2').html('<b>Support 2:</b> ' + response.standard.s2);
                $('#standardR3').html('<b>Resistance 3:</b> ' + response.standard.r3);
                $('#standardS3').html('<b>Support 3:</b> ' + response.standard.s3);

                // Fibonacci Pivot Points
                $('#fibonacciPivotPoint').html('<b>Pivot Point:</b> ' + response.fibonacci.pivotPoint);
                $('#fibonacciR1').html('<b>Resistance 1:</b> ' + response.fibonacci.r1);
                $('#fibonacciS1').html('<b>Support 1:</b> ' + response.fibonacci.s1);
                $('#fibonacciR2').html('<b>Resistance 2:</b> ' + response.fibonacci.r2);
                $('#fibonacciS2').html('<b>Support 2:</b> ' + response.fibonacci.s2);
                $('#fibonacciR3').html('<b>Resistance 3:</b> ' + response.fibonacci.r3);
                $('#fibonacciS3').html('<b>Support 3:</b> ' + response.fibonacci.s3);

                // Camarilla Pivot Points
                $('#camarillaPivotPoint').html('<b>Pivot Point:</b> ' + response.camarilla.pivotPoint);
                $('#camarillaR1').html('<b>Resistance 1:</b> ' + response.camarilla.r1);
                $('#camarillaS1').html('<b>Support 1:</b> ' + response.camarilla.s1);
                $('#camarillaR2').html('<b>Resistance 2:</b> ' + response.camarilla.r2);
                $('#camarillaS2').html('<b>Support 2:</b> ' + response.camarilla.s2);
                $('#camarillaR3').html('<b>Resistance 3:</b> ' + response.camarilla.r3);
                $('#camarillaS3').html('<b>Support 3:</b> ' + response.camarilla.s3);
            },
            error: function(xhr) {
                var errors = xhr.responseJSON.errors;
                var errorMessage = '';
                $.each(errors, function(key, value) {
                    errorMessage += value[0] + '\n';
                });
                alert(errorMessage);
            }
        });
    });
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