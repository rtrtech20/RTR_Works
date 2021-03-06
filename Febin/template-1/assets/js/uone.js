// repeated variables
var $window = $(window);
var $root = $("html, body");

$(document).ready(function () {
  "use strict";
  colorScheme();
  singlePortfolioCarousel();
  smoothScroll();
  sliderOwlCarousel();
  typedJS();
  portfolioPopup();
  testimonialsCarousel();
  mapInit();
  backToTop();
  wow();
});

$window.on("load", function () {
  $("#overlayer, .loader").delay(1000).fadeOut("slow");
  portfolioIsotop();
  headerSticky();
});
$window.on("scroll", function () {
  skills();
  countUp();
});

/*-----------------------------------------------------------------------------
                                   FUNCTIONS
-----------------------------------------------------------------------------*/

/*-------------------------
        Color Scheme
-------------------------*/
function colorScheme() {
  var $darkLogo = $(".dark-logo");
  $(".color-scheme").click(function () {
    $("body").toggleClass("uone-dark");
    $(".color-scheme").removeClass("d-none").addClass("d-inline-block");
    $(this).removeClass("d-inline-block").addClass("d-none");
  });
}
/*-------------------------
        SMOOTH SCROLL
-------------------------*/
function smoothScroll() {
  "use strict";

  $(".header .navbar-nav a, .hero a").on("click", function (event) {
    var $anchor = $(this);
    $root.stop().animate(
      {
        scrollTop: $($anchor.attr("href")).offset().top - 60,
      },
      1500,
      "easeInOutQuart"
    );
    // event.preventDefault();
    $(".navbar-collapse").collapse("hide");
  });
}

/*-------------------------
        HEADER STICKY
-------------------------*/
function headerSticky() {
  "use strict";

  if ($window.scrollTop() > 100) {
    $("#header").addClass("header-sticky");
  } else {
    $("#header").removeClass("header-sticky");
  }
}

/*-----------------------------
      SLIDER OWL CAROUSEL
------------------------------*/
function sliderOwlCarousel() {
  $(".hero .owl-carousel").owlCarousel({
    loop: false,
    items: 1,
    nav: false,
    autoplay: false,
    touchDrag: false,
    smartSpeed: 1000,
    animateOut: "fadeOut",
    autoplayHoverPause: false,
  });
}

/*-------------------------
        TYPED JS
-------------------------*/
function typedJS() {
  "use strict";

  var $element = $(".element");
  if ($element.length) {
    var options = {
      strings: $element.attr("data-elements").split(","),
      typeSpeed: 100,
      backDelay: 3000,
      backSpeed: 50,
      loop: true,
    };
    var typed = new Typed(".element", options);
  }
}

/*-------------------------
            Skills
  -------------------------*/
function skills() {
  "use strict";

  var scroll = $window.scrollTop();
  var skillsDiv = $("#skills");
  if (skillsDiv.length > 0) {
    var winH = $window.height(),
      skillsT = skillsDiv.offset().top;
    if (scroll + winH > skillsT) {
      $(".skillbar").each(function () {
        $(this)
          .find(".skillbar-bar")
          .animate(
            {
              width: $(this).attr("data-percent"),
            },
            6000
          );
      });
    }
  }
}

/*-------------------------
     MAGNIFIC POPUP JS
-------------------------*/
function portfolioPopup() {
  "use strict";

  if (".portfolio-items".length > 0) {
    $(".portfolio-items").each(function () {
      $(this).magnificPopup({
        delegate: ".js-zoom-gallery",
        type: "image",
        gallery: {
          enabled: true,
        },
      });
    });
  }
}

/*-------------------------
        ISOTOPE JS
-------------------------*/
function portfolioIsotop() {
  "use strict";

  var $container = $(".portfolio-items");
  var $filter = $("#portfolio-filter");
  $container.isotope({
    filter: "*",
    layoutMode: "masonry",
    animationOptions: {
      duration: 750,
      easing: "linear",
    },
  });
  $filter.find("a").on("click", function () {
    var selector = $(this).attr("data-filter");
    $filter.find("a").removeClass("active");
    $(this).addClass("active");
    $container.isotope({
      filter: selector,
      animationOptions: {
        animationDuration: 750,
        easing: "linear",
        queue: false,
      },
    });
    return false;
  });
}

/*-------------------------
     OWL CAROUSEL JS
-------------------------*/
function testimonialsCarousel() {
  "use strict";

  $(".testimonial .owl-carousel").owlCarousel({
    items: 1,
    nav: false,
    autoplay: true,
    loop: true,
    dots: true,
    mouseDrag: true,
    touchDrag: true,
    smartSpeed: 1000,
    autoplayHoverPause: true,
  });
}

/*-------------------------
            Count up
  -------------------------*/
function countUp() {
  "use strict";

  var scroll = $window.scrollTop();
  var countId = $("#count-up");
  if (countId.length) {
    var winH = $window.height(),
      countOffset = countId.offset().top;
    if (scroll + winH > countOffset) {
      $(".timer").countTo();
      $(".count-number").removeClass("timer");
    }
  }
}

/*-------------------------
          GOOGLE Map
  -------------------------*/
function mapInit() {
  "use strict";
  if ($("#my-map").length) {
    var options = {
      center: new google.maps.LatLng(8.5211453, 76.9650192),
      zoom: 15,
      mapTypeControl: true,
      panControl: false,
      zoomControl: true,
      zoomControlOptions: {
        style: google.maps.ZoomControlStyle.DEFAULT,
        position: google.maps.ControlPosition.TOP_LEFT,
      },
      scaleControl: false,
      styles: [
        {
          featureType: "water",
          elementType: "geometry",
          stylers: [
            {
              color: "#576ee9",
            },
            {
              lightness: 17,
            },
          ],
        },
        {
          featureType: "landscape",
          elementType: "geometry",
          stylers: [
            {
              color: "#f5f5f5",
            },
            {
              lightness: 20,
            },
          ],
        },
        {
          featureType: "road.highway",
          elementType: "geometry.fill",
          stylers: [
            {
              color: "#ffffff",
            },
            {
              lightness: 17,
            },
          ],
        },
        {
          featureType: "road.highway",
          elementType: "geometry.stroke",
          stylers: [
            {
              color: "#ffffff",
            },
            {
              lightness: 29,
            },
            {
              weight: 0.2,
            },
          ],
        },
        {
          featureType: "road.arterial",
          elementType: "geometry",
          stylers: [
            {
              color: "#ffffff",
            },
            {
              lightness: 18,
            },
          ],
        },
        {
          featureType: "road.local",
          elementType: "geometry",
          stylers: [
            {
              color: "#ffffff",
            },
            {
              lightness: 18,
            },
          ],
        },
        {
          featureType: "poi",
          elementType: "geometry",
          stylers: [
            {
              color: "#f5f5f5",
            },
            {
              lightness: 21,
            },
          ],
        },
        {
          featureType: "poi.park",
          elementType: "geometry",
          stylers: [
            {
              color: "#d5d5d5",
            },
            {
              lightness: 21,
            },
          ],
        },
        {
          elementType: "labels.text.stroke",
          stylers: [
            {
              visibility: "on",
            },
            {
              color: "#f8f8f8",
            },
            {
              lightness: 25,
            },
          ],
        },
        {
          elementType: "labels.text.fill",
          stylers: [
            {
              saturation: 36,
            },
            {
              color: "#222222",
            },
            {
              lightness: 30,
            },
          ],
        },
        {
          elementType: "labels.icon",
          stylers: [
            {
              visibility: "off",
            },
          ],
        },
        {
          featureType: "transit",
          elementType: "geometry",
          stylers: [
            {
              color: "#f5f5f5",
            },
            {
              lightness: 19,
            },
          ],
        },
        {
          featureType: "administrative",
          elementType: "geometry.fill",
          stylers: [
            {
              color: "#fefefe",
            },
            {
              lightness: 10,
            },
          ],
        },
        {
          featureType: "administrative",
          elementType: "geometry.stroke",
          stylers: [
            {
              color: "#fefefe",
            },
            {
              lightness: 17,
            },
            {
              weight: 1.2,
            },
          ],
        },
      ],
    };
    var map = new google.maps.Map(document.getElementById("my-map"), options);
    var marker1 = new google.maps.Marker({
      position: map.getCenter(),
      title: "Megabyte Technologies",
      icon: "assets/img/location-map.png",
      animation: google.maps.Animation.BOUNCE,
    });
    marker1.setMap(map);
  }
}





/*----------------------------
          WOW Init
-----------------------------*/
function wow() {
  new WOW().init();
}

/*-------------------------------------
   SINGLE PORTFOLIO OWL CAROUSEL JS
-------------------------------------*/
function singlePortfolioCarousel() {
  "use strict";

  $("#related-portfolio .related-portfolio.owl-carousel").owlCarousel({
    nav: true,
    margin: 15,
    autoplay: true,
    loop: true,
    mouseDrag: true,
    touchDrag: true,
    smartSpeed: 1000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      991: {
        items: 3,
      },
    },
  });

  $("#single-portfolio .owl-carousel").owlCarousel({
    items: 1,
    nav: true,
    autoplay: true,
    loop: true,
    mouseDrag: true,
    touchDrag: true,
    smartSpeed: 1000,
    autoplayHoverPause: true,
  });
}
