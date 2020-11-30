/********* Sticky Header *********/
// When the user scrolls the page, execute myFunction
window.onscroll = function () {
  myFunction();
};

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
/*  */

/********* Modal Box for Contact Form & About Us*********/
// Get the modal
var modal_1 = document.getElementById("aboutModalContent");
var modal_2 = document.getElementById("contactModalForm");
// var modal_3 = document.getElementById("myModal-3");
// var modal_4 = document.getElementById("myModal-4");
// var modal_5 = document.getElementById("myModal-5");

// Get the button that opens the modal
var btn_1 = document.getElementById("aboutModal");
var btn_2 = document.getElementById("contactModal");
// var btn_3 = document.getElementById("myBtn-3");
// var btn_4 = document.getElementById("myBtn-4");
// var btn_5 = document.getElementById("myBtn-5");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn_1.onclick = function () {
  modal_1.style.display = "block";
};
btn_2.onclick = function () {
  modal_2.style.display = "block";
};
// btn_3.onclick = function () {
//   modal_3.style.display = "block";
// };
// btn_4.onclick = function () {
//   modal_4.style.display = "block";
// };
// btn_5.onclick = function () {
//   modal_5.style.display = "block";
// };

// When the user clicks on <span> (x), close the modal
document.querySelector(".close-1").onclick = function () {
  modal_1.style.display = "none";
};
document.querySelector(".close-2").onclick = function () {
  modal_2.style.display = "none";
};
// document.querySelector(".close-3").onclick = function () {
//   modal_3.style.display = "none";
// };
// document.querySelector(".close-4").onclick = function () {
//   modal_4.style.display = "none";
// };
// document.querySelector(".close-5").onclick = function () {
//   modal_5.style.display = "none";
// };

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal_1) {
    modal_1.style.display = "none";
  } else if (event.target == modal_2) {
    modal_2.style.display = "none";
    // } else if (event.target == modal_3) {
    //   modal_3.style.display = "none";
    // } else if (event.target == modal_4) {
    //   modal_4.style.display = "none";
    // } else if (event.target == modal_5) {
    //   modal_5.style.display = "none";
    // }
  }
};
