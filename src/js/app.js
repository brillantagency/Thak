function infinityCopy() {
    gsap.registerPlugin(ScrollTrigger);

    const txtBanner = document.querySelector('.text_infinity-js');
    const txtBannerP = document.querySelector('.text_infinity-js p');

    if (txtBanner) {
        const txtBannerWidth = txtBanner.offsetWidth;

        gsap.to('.text_infinity-js, .text_infinity_copy', {
            x: -txtBannerWidth,
            ease: "linear",
            repeat: -1,
            duration: 25,
        });

        gsap.to(txtBanner, {
            scrollTrigger: {
                trigger: ".text_infinity-js",
                start: "top 80%",
                end: "10% 78%",
                scrub: .5,
            },
            rotation: -2,
            ease: "ease",
        });

        if (txtBannerP) {
            gsap.to(txtBannerP, {
                x: "-45%",
                ease: "ease",
                scrollTrigger: {
                    trigger: ".text_infinity-js",
                    start: "0% 50%",
                    end: "80% 50%",
                    scrub: 1,
                }
            });
        }
    }
}

function slider() {
    $('.slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 2.4,
        centerMode: false,
        arrows: true,
        prevArrow: '.prev',
        nextArrow: '.next',
        responsive: [
            { breakpoint: 4000, settings: { slidesToShow: 4, arrows: true } },
            { breakpoint: 3000, settings: { slidesToShow: 3, arrows: true } },
            { breakpoint: 2000, settings: { slidesToShow: 2, arrows: true } },
            { breakpoint: 1260, settings: { slidesToShow: 1, arrows: true } },
        ]
    });
}

function burgerMenu() {
    const burger = document.getElementById("burger");
    const overlay = document.getElementById("overlay-menu");
    const closeBtn = document.getElementById("close-btn");

    burger.addEventListener("click", () => {
        console.log('click open');
        document.body.classList.toggle('classe-du-body');
    });

    closeBtn.addEventListener("click", () => {
        console.log('click close');
        document.body.classList.remove('classe-du-body');
    });
}

function scrollAnchor() {
  // Gestion des clics sur les liens internes avec ancre
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute("href"));
      if (target) {
        const headerOffset = 100; // ajuste si tu as un header sticky
        const elementPosition = target.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

        window.scrollTo({
          top: offsetPosition,
          behavior: "smooth"
        });

        history.pushState(null, null, this.getAttribute("href"));
      }
    });
  });

  // Scroll vers l'ancre si hash présent dans l'URL (depuis une autre page)
  window.addEventListener("load", function() {
    const hash = window.location.hash;
    if (hash) {
      const target = document.querySelector(hash);
      if (target) {
        const headerOffset = 100; // même offset pour header sticky
        const elementPosition = target.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

        window.scrollTo({
          top: offsetPosition,
          behavior: "smooth"
        });
      }
    }
  });
}

document.addEventListener('DOMContentLoaded', function() {
    infinityCopy();
    burgerMenu();
    slider();
	scrollAnchor();
});