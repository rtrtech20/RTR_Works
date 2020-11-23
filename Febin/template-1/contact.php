<?php
$currentPage = 'contact'; // current page is about, do the same for other page
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <!--  Plugins CSS  -->
    <link rel="stylesheet" href="assets/css/plugins.css" />

    <!--  Custom Style CSS  -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/rtr.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>

    <style>
      ::placeholder {
        /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #fff;
        opacity: 1; /* Firefox */
      }

      :-ms-input-placeholder {
        /* Internet Explorer 10-11 */
        color: #fff;
      }

      ::-ms-input-placeholder {
        /* Microsoft Edge */
        color: #fff;
      }
    </style>
  </head>
  <body>

  <!--   Footer  -->
  <?php include "includes/Header.php"?>

  <div id="contact" class="contact-container">
      <span class="big-circle"></span>
      <img src="assets/img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>

          <div class="info">
            <div class="information">
              <img src="assets/img/location.png" class="icon" alt="" />
              <p>
                <a
                  href="https://www.google.com/maps/place/Megabyte+Technologies/@8.5211453,76.9628252,17z/data=!3m1!4b1!4m5!3m4!1s0x3b05bb04e347011d:0x51d0be4b8a6969c3!8m2!3d8.5211453!4d76.9650192?hl=en"
                  >VJRA C17, Jawahar Lane Sasthamangalam, Trivandrum -10</a
                >
              </p>
            </div>
            <div class="information">
              <img src="assets/img/email.png" class="icon" alt="" />
              <p>
                <a href="mailto:megabyte_technologies@yahoo.co.in"
                  >[email protected]</a
                >
              </p>
            </div>
            <div class="information">
              <img src="assets/img/phone.png" class="icon" alt="" />
              <p><a href="tel:9387813000">+91 93878 13000</a>,<br> <a href="tel:9387813000">+91 93878 13000</a></p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form id="form" action="contact.html" autocomplete="on">
            <h3 class="title">Contact us</h3>

            <!-- Username -->
            <div class="input-contact-container">
              <input
                id="username"
                type="text"
                name="name"
                class="input"
                placeholder="Username*"
              />
              <i class="fas fa-check-circle"></i>
              <i class="fas fa-exclamation-circle"></i>
              <small>Error message</small>
            </div>

            <!-- Email -->
            <div class="input-contact-container">
              <input
                id="email"
                type="email"
                name="email"
                class="input"
                placeholder="Email*"
              />
              <i class="fas fa-check-circle"></i>
              <i class="fas fa-exclamation-circle"></i>
              <small>Error message</small>
            </div>

            <!-- Phone Number -->
            <div class="input-contact-container">
              <input
                id="phoneNumber"
                type="tel"
                name="phone"
                class="input"
                placeholder="Phone Number"
              />
              <i class="fas fa-check-circle"></i>
              <i class="fas fa-exclamation-circle"></i>
              <small>Error message</small>
            </div>

            <!-- Message -->
            <div class="input-contact-container textarea">
              <textarea
                id="message"
                name="message"
                class="input"
                placeholder="Message*"
              ></textarea>
              <i class="fas fa-check-circle"></i>
              <i class="fas fa-exclamation-circle"></i>
              <small>Error message</small>
            </div>
            <input type="submit" value="Submit" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <!--  -->

    <!--   Contact Start   -->
<section id="home-contact" class="contact text-center py-6">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="text-center">
          <h2 class="text-dark mb-3">
            Get <span class="base-color">In Touch</span>
          </h2>
          <p class="text-muted max-width-450">
            In a professional context it often happens that private clients
            corder a publication to be made.
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 mt-5 text-md-left text-center">
        <div id="my-map"></div>
      </div>
      <div class="col-lg-6 text-md-left text-center">
        <div class="col-lg-12 mt-5 contact-form">
          <h4>Let’s Get Excited Work With Me</h4>
          <p class="text-muted">
            Are constantly thriving . It’s not enough trust in the cleaning.
          </p>
          <form id="contactForm">
            <div class="row">
              <div class="col-lg-6 form-item">
                <div class="form-group">
                  <input
                    name="name"
                    id="name"
                    type="text"
                    class="form-control"
                    placeholder="Your Name*"
                    required
                  />
                </div>
              </div>
              <div class="col-lg-6 form-item">
                <div class="form-group">
                  <input
                    name="email"
                    id="email"
                    type="email"
                    class="form-control"
                    placeholder="Your Email*"
                    required
                  />
                </div>
              </div>
              <div class="col-12 form-item">
                <div class="form-group">
                  <input
                    name="subject"
                    id="subject"
                    type="text"
                    class="form-control"
                    placeholder="Your Subject*"
                    required
                  />
                </div>
              </div>
              <div class="col-12 form-item">
                <div class="form-group">
                  <textarea
                    name="comments"
                    id="comments"
                    rows="4"
                    class="form-control"
                    placeholder="Your message..."
                  ></textarea>
                </div>
              </div>
              <div class="col-sm-12 mt-4 text-left">
                <button
                  type="button"
                  class="pill-button rounded"
                  id="submit-btn"
                  onclick="sendEmail()"
                >
                  Send Message
                </button>
                <div
                  id="message"
                  class="toast text-white shadow-none border-0"
                  role="alert"
                  aria-live="assertive"
                  aria-atomic="true"
                  data-delay="4000"
                >
                  <div class="toast-body d-inline-block"></div>
                  <button
                    type="button"
                    class="pr-3 close"
                    data-dismiss="toast"
                    aria-label="Close"
                  >
                    <span
                      aria-hidden="true"
                      class="lni-close size-xs text-white"
                    ></span>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--   Contact End   -->

    <!--   Footer  -->
    <?php include "includes/Footer.php"?>

    <!-- SCRIPTS start Here -->
    <!--  JavaScripts  -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <!--  Plugins JS  -->
    <script src="assets/js/plugins.js"></script>

    <script>
      const inputs = document.querySelectorAll(".input");

      function focusFunc() {
        let parent = this.parentNode;
        parent.classList.add("focus");
      }

      function blurFunc() {
        let parent = this.parentNode;
        if (this.value == "") {
          parent.classList.remove("focus");
        }
      }

      inputs.forEach((input) => {
        input.addEventListener("focus", focusFunc);
        input.addEventListener("blur", blurFunc);
      });

      const form = document.getElementById("form");
      const username = document.getElementById("username");
      const email = document.getElementById("email");
      const phoneNumber = document.getElementById("phoneNumber");
      const message = document.getElementById("message");

      form.addEventListener("submit", (e) => {
        e.preventDefault();

        checkInputs();
      });

      function checkInputs() {
        // trim to remove the whitespaces
        const usernameValue = username.value.trim();
        const emailValue = email.value.trim();
        const phoneNumberValue = phoneNumber.value.trim();
        const messageValue = message.value.trim();

        let pnum = phoneNumberValue.split("");
        console.log(pnum);

        if (usernameValue === "") {
          setErrorFor(username, "Username cannot be blank");
        } else {
          setSuccessFor(username);
        }

        if (emailValue === "") {
          setErrorFor(email, "Email cannot be blank");
        } else if (!isEmail(emailValue)) {
          setErrorFor(email, "Not a valid email");
        } else {
          setSuccessFor(email);
        }

        if (phoneNumberValue === "") {
          setErrorFor(phoneNumber, "Invalid Phone Number");
        } else {
          setSuccessFor(phoneNumber);
        }

        if (messageValue === "") {
          setErrorFor(message, "Message cannot be blank");
        } else {
          setSuccessFor(message);
        }
      }

      function setErrorFor(input, message) {
        const formControl = input.parentElement;
        const small = formControl.querySelector("small");
        formControl.className = "input-contact-container error";
        small.innerText = message;
      }

      function setSuccessFor(input) {
        const formControl = input.parentElement;
        formControl.className = "input-contact-container success";
      }

      function isEmail(email) {
        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
          email
        );
      }
    </script>


  </body>
</html>
