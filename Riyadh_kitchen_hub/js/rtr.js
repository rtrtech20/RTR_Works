/* File Description: preloader js */
// (function ($) {
//   "use strict";
//   //Preloader
//   window.addEventListener("load", function () {
//     var preloadpage = document.getElementById("page_loader");
//     preloadpage.style.display = "none";
//   });
// })(jQuery);

$(window).on("load", function () {
  "use strict";
  $(".body").fadeOut(), $("body").removeClass("loading-scroll-hiden");
});

// Slick Slider
$(".client-slider").slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 2,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 1000,
  infinite: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2,
      },
    },
  ],
});
