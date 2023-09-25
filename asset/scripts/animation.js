// preloader

window.addEventListener("load", () => {
    document.getElementById("preloader").style.display = "none";
})
setTimeout(() => {
    document.getElementById("preloader").style.display = "none";
}, 5000);

// navbar animation

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('header').addClass('scrollNav');
        } else {
            $('header').removeClass('scrollNav');
        }
    })
});

// main-work-section Animation

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 20) {
            $('.animationTop').addClass('scroller_up');
        }
    })
});

// about-company-section

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1200) {
            $('.about-company-section').addClass('scroller_up');
        }
    })
});

// service left right animation

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 2200) {
            $('.service-list-left .service-content').addClass('scroller_left');
        }
    })
});

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 2300) {
            $('.service-list-right .service-content').addClass('scroller_right');
        }
    })
});

// choosing-section

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 4280) {
            $('.choosing-section').addClass('scroller_up');
        }
    })
});

// achivment

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 6710) {
            $('.achieve').addClass('scroller_up');
        }
    })
});