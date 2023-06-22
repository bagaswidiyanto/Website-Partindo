(function ($) {
  "use strict";

  // // Spinner
  // var spinner = function () {
  //     setTimeout(function () {
  //         if ($('#spinner').length > 0) {
  //             $('#spinner').removeClass('show');
  //         }
  //     }, 1);
  // };
  // spinner();

  // Initiate the wowjs
  new WOW().init();

  const portfolioLightbox = GLightbox({
    selector: ".portofolio-lightbox",
  });

  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $(".sticky-top").addClass("shadow-sm").css("top", "0px");
    } else {
      $(".sticky-top").removeClass("shadow-sm").css("top", "-140px");
    }
  });

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 300, "easeInOutExpo");
    return false;
  });

  // Facts counter
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000,
  });

  // Portfolio isotope and filter
  var portfolioIsotope = $(".portfolio-container").isotope({
    itemSelector: ".portfolio-item",
    layoutMode: "fitRows",
  });
  $("#portfolio-flters li").on("click", function () {
    $("#portfolio-flters li").removeClass("active");
    $(this).addClass("active");

    portfolioIsotope.isotope({ filter: $(this).data("filter") });
  });

  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    items: 1,
    dots: false,
    loop: true,
    nav: true,
    navText: [
      '<i class="bi bi-chevron-left"></i>',
      '<i class="bi bi-chevron-right"></i>',
    ],
  });

  var cardSlider = new Swiper(".top-feature-slider", {
    autoplay: false,
    // {
    // 	delay: 4000,
    // 	disableOnInteraction: false
    // },
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    slidesPerView: 4,
    spaceBetween: 0,
    breakpoints: {
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      // when window width is >= 640px
      600: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      767: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      // when window is <= 991px
      991: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
    },
  });
  var cardSlider = new Swiper(".portofolio-slider", {
    autoplay: false,
    // {
    // 	delay: 4000,
    // 	disableOnInteraction: false
    // },
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    slidesPerView: 4,
    spaceBetween: 30,
    breakpoints: {
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      // when window width is >= 640px
      600: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      767: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      // when window is <= 991px
      991: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
  });

  var cardSlider = new Swiper(".genset-division-slider", {
    autoplay: false,
    // {
    // 	delay: 4000,
    // 	disableOnInteraction: false
    // },
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    slidesPerView: 4,
    spaceBetween: 30,
    breakpoints: {
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      // when window width is >= 640px
      600: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      767: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      // when window is <= 991px
      991: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
  });

  var cardSlider = new Swiper(".panel-instalation-slider", {
    autoplay: false,
    // {
    // 	delay: 4000,
    // 	disableOnInteraction: false
    // },
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    slidesPerView: 4,
    spaceBetween: 30,
    breakpoints: {
      // when window width is >= 480px
      480: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      // when window width is >= 640px
      600: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      767: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      // when window is <= 991px
      991: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
  });

  var cardSlider = new Swiper(".shorts-video-slider", {
    autoplay: false,
    // {
    // 	delay: 4000,
    // 	disableOnInteraction: false
    // },
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    slidesPerView: 3,
    spaceBetween: 30,
    breakpoints: {
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      // when window width is >= 640px
      600: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      767: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      // when window is <= 991px
      991: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
  });

  var cardSlider = new Swiper(".test-slider", {
    autoplay: false,
    // {
    // 	delay: 4000,
    // 	disableOnInteraction: false
    // },
    loop: true,
    // navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev'
    // },
    slidesPerView: 4,
    slidesPerGroup: 4,
    spaceBetween: 0,
  });
})(jQuery);
