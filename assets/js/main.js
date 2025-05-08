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
        const target = jQuery(event.target); // define target

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
      slidesToShow: 3,   // 3 slides on desktop
      slidesToScroll: 1,
      arrows: false,
      dots: false,
      centerMode: true,  // No center mode
      variableWidth: false, // Ensure slides are all the same width
      infinite: true,     // Infinite loop effect
      focusOnSelect: true,
      cssEase: "linear",
      touchMove: true,
      responsive: [
        {
          breakpoint: 768,  // For mobile devices (<= 768px)
          settings: {
            slidesToShow: 1,   // 1 slide on mobile
            slidesToScroll: 1,
            centerMode: false, // Ensure no center mode on mobile
            dots: true,
            adaptiveHeight: true,
          }
        }
      ],
    });
    
    
    
    const root = document.documentElement;
    if (jQuery('#wpadminbar').length > 0) {
      root.style.setProperty('--header-height', (jQuery('#wpadminbar').outerHeight() + jQuery('.header').outerHeight()) + 'px');
    } else {
      root.style.setProperty('--header-height', jQuery('.header').outerHeight() + 'px');
    }
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

    const statsSection = document.querySelector(".stats-section");
    if (statsSection) {
      observer.observe(statsSection);
    }
  });
  // Initialize Masonry after all images load
  window.addEventListener("load", () => {
    const grid = document.querySelector(".grid");
    new Masonry(grid, {
      itemSelector: ".grid-item",
      columnWidth: ".grid-item",
      percentPosition: true,
      gutter: 0,
    });
  });

  window.addEventListener('resize', () => {
    root.style.setProperty('--header-height', jQuery('.header').outerHeight() + 'px');
  });

  Fancybox.bind("[data-fancybox]", {
    // your custom options
  });
})(jQuery);
