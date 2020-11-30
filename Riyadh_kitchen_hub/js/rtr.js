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

// Modal Boxes

// Get the modal
var modal_1 = document.getElementById("myModal-1");
var modal_2 = document.getElementById("myModal-2");
var modal_3 = document.getElementById("myModal-3");
var modal_4 = document.getElementById("myModal-4");

// Get the button that opens the modal
var btn_1 = document.getElementById("myBtn-1");
var btn_2 = document.getElementById("myBtn-2");
var btn_3 = document.getElementById("myBtn-3");
var btn_4 = document.getElementById("myBtn-4");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn_1.onclick = function () {
  modal_1.style.display = "block";
};
btn_2.onclick = function () {
  modal_2.style.display = "block";
};
btn_3.onclick = function () {
  modal_3.style.display = "block";
};
btn_4.onclick = function () {
  modal_4.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
document.querySelector(".close-1").onclick = function () {
  modal_1.style.display = "none";
};
document.querySelector(".close-2").onclick = function () {
  modal_2.style.display = "none";
};
document.querySelector(".close-3").onclick = function () {
  modal_3.style.display = "none";
};
document.querySelector(".close-4").onclick = function () {
  modal_4.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal_1) {
    modal_1.style.display = "none";
  } else if (event.target == modal_2) {
    modal_2.style.display = "none";
  } else if (event.target == modal_3) {
    modal_3.style.display = "none";
  } else if (event.target == modal_4) {
    modal_4.style.display = "none";
  }
};
