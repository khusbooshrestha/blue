(function ($) {
    $(document).ready(function(){
        jQuery('html').on('click', '.nav_control', function(event) {
            event.preventDefault();
            jQuery('body').toggleClass('nav-active');
    
            if(jQuery('body').hasClass('nav-active')) {
                lockBody();
            } else {
                unlockBody();
            }
        });
        jQuery('html').on('click touchstart pointerdown MSPointerDown', function(event) {
            if(!target.closest('.nav_control').length && !target.closest('.main-navigation').length) {
                if(document.body.classList.contains('body-locked') && document.body.classList.contains('nav-active')) {
                    unlockBody();
                }
                jQuery('body').removeClass('nav-active');
            }
        });

        $('.testimonial-slider').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        centerPadding: '20px'
                    }
                }
            ]
        });
    });
      document.addEventListener("DOMContentLoaded", function () {
        const counters = document.querySelectorAll(".count");
        let isAnimated = false; // Prevent multiple triggers
    
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !isAnimated) {
                    isAnimated = true;
                    counters.forEach(counter => {
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
        }, { threshold: 0.5 }); // Trigger when 50% of the section is visible
    
        observer.observe(document.querySelector(".stats-section"));
    });
  
})(jQuery);