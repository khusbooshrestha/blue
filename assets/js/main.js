(function ($) {
  $(document).ready(function () {
    jQuery("html").on("click", ".nav_control", function (event) {
      event.preventDefault();
      jQuery("body").toggleClass("nav-active");

      if (jQuery("body").hasClass("nav-active")) {
        lockBody();
      } else {
        unlockBody();
      }
    });
    jQuery("html").on(
      "click touchstart pointerdown MSPointerDown",
      function (event) {
        if (
          !target.closest(".nav_control").length &&
          !target.closest(".main-navigation").length
        ) {
          if (
            document.body.classList.contains("body-locked") &&
            document.body.classList.contains("nav-active")
          ) {
            unlockBody();
          }
          jQuery("body").removeClass("nav-active");
        }
      }
    );

    $(".testimonial-slider").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      dots: false,
      centerMode: true,
      variableWidth: true,
      infinite: true,
      focusOnSelect: true,
      cssEase: "linear",
      touchMove: true,
      prevArrow: '<button class="slick-prev"> < </button>',
      nextArrow: '<button class="slick-next"> > </button>',
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            centerMode: false,
          }
        },

      ],
    });
  });
  document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".count");
    let isAnimated = false; // Prevent multiple triggers

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting && !isAnimated) {
            isAnimated = true;
            counters.forEach((counter) => {
              counter.innerText = "0";
              const updateCount = () => {
                const target = +counter.getAttribute("data-target");
                const count = +counter.innerText;
                const speed = target / 100;

                if (count < target) {
                  counter.innerText = Math.ceil(count + speed);
                  setTimeout(updateCount, 50);
                } else {
                  counter.innerText = target;
                }
              };
              updateCount();
            });
          }
        });
      },
      { threshold: 0.5 }
    ); // Trigger when 50% of the section is visible

    observer.observe(document.querySelector(".stats-section"));
  });
  // Initialize Masonry after all images load
  window.addEventListener("load", () => {
    const grid = document.querySelector(".grid");
    new Masonry(grid, {
      itemSelector: ".grid-item",
      columnWidth: ".grid-item",
      percentPosition: true,
      gutter: 10,
    });
  });
})(jQuery);
