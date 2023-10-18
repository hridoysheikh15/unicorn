// preloader

window.addEventListener("load", () => {
  document.getElementById("preloader").style.display = "none";
});
setTimeout(() => {
  document.getElementById("preloader").style.display = "none";
}, 5000);

// navbar animation
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $("header").addClass("scrollNav");
    } else {
      $("header").removeClass("scrollNav");
    }
  });

  // main-work-section Animation

  $(window).scroll(function () {
    if ($(this).scrollTop() > 20) {
      $(".animationTop").addClass("scroller_up");
    }
  });

  // about-company-section

  $(window).scroll(function () {
    if ($(this).scrollTop() > 1300) {
      $(".about-company-section").addClass("scroller_up");
    }
  });

  // service left right animation

  $(window).scroll(function () {
    if ($(this).scrollTop() > 2500) {
      $(".service-list-left .service-content").addClass("scroller_left");
    }
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() > 2600) {
      $(".service-list-right .service-content").addClass("scroller_right");
    }
  });

  // choosing-section

  $(window).scroll(function () {
    if ($(this).scrollTop() > 4600) {
      $(".choosing-section").addClass("scroller_up");
    }
  });
  // achivment

  $(window).scroll(function () {
    if ($(this).scrollTop() > 6850) {
      $(".achieve").addClass("scroller_up");
    }
  });

  // project number counter

  $(window).scroll(function () {
    if ($(this).scrollTop() > 1920) {
      let counters = document.querySelectorAll(".counting");
      const speed = 400;
      counters.forEach((counter) => {
        const updateCount = () => {
          const target = +counter.getAttribute("data-target");
          const count = +counter.innerText;

          const inc = target / speed;

          if (count < target) {
            counter.innerText = count + inc;
            setTimeout(updateCount, 10);
          } else {
            counter.innerText = target;
          }
        };

        updateCount();
      });
    }
  });
});

// partner animation section auto scroller

const slider = document.getElementById('partner_slider');

slider.addEventListener('mouseenter', () => {
  slider.style.animationPlayState = 'paused';
});

slider.addEventListener('mouseleave', () => {
  slider.style.animationPlayState = 'running';
});
