<?php
$currentPage = 'home'; // current page is about, do the same for other page
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Megabyte Technologies - Power your homes</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="RTR Technologies" />

    <!--  FavIcon  -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Muli:400,600"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700"
      rel="stylesheet"
    />

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css" />
    <!--  Plugins CSS  -->
    <link rel="stylesheet" href="assets/css/plugins.css" />

    <!--  Custom Style CSS  -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/rtr.css" />
  </head>
  <body>


    <!--  Pre Loader  -->
    <div id="overlayer"></div>
    <span class="loader"></span>

    <!-- Progress Bar -->
    <div id="progress"></div>

    <!-- Back to top button -->
    <a id="button"></a>

    <!--    Header Start    -->
    <?php include "includes/Header.php"?>
    <!--    Header End    -->



    <!-- START HERO SECTION -->
    <div class="hero_section hero-fullscreen fixed_bg para-four">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <!-- END HERO SECTION DESC -->
            <div class="inner_hero_section">
              <img
                src="assets/img/Asset 18Final White.png"
                width="300px"
                alt="Header Logo"
              />
              <p class="text-white mx-auto mt-4">
                In a professional context it often happens that private clients
                corder a publication to be made.
              </p>
              <div class="mt-4 pt-2">
                <a
                  href="#about"
                  class="pill-button white-pill-button font-weight-bold"
                  >Read More</a
                >
              </div>
            </div>
            <!-- END HERO SECTION DESC -->
          </div>
        </div>
      </div>
    </div>
    <!-- END HERO SECTION -->

    <!--   About Start   -->
    <section id="about" class="py-6 about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img
              src="assets/img/about-01.jpg"
              alt="/"
              class="w-100 rounded img-thumbnail"
            />
          </div>
          <div class="col-lg-6 mt-4 mt-lg-0">
            <h2 class="text-dark mb-3">
              About <span class="base-color">Us</span>
            </h2>
            <h5 class="text-dark mb-0">
              <span class="base-color">We're </span>
              <span
                class="element"
                data-elements="Megabyte Technologies."
              ></span>
            </h5>
            <p class="text-muted mt-3">
              Megabyte Technologies is one among the front runners in UPS and
              Inverter manufacturers in Kerala. From 2002 onwards as a part of
              our policy we are researching and developing Eco- friendly
              machines - Wind and Solar. We have developed clean technology
              products which gives trouble free experience and economic benefit
              to the customers.
            </p>
            <div class="row">
              <div class="col-6">
                <p class="text-dark">
                  Founded : <span class="base-color"> 2002</span>
                </p>

                <p class="text-dark">
                  Phone :
                  <span class="base-color"
                    ><a href="tel:9387813000">+91 93878 13000</a></span
                  >
                </p>
              </div>
              <div class="col-6">
                <p class="text-dark">
                  Mail :
                  <span class="base-color"
                    ><a href="mailto:megabyte_technologies@yahoo.co.in"
                      >[email protected]</a
                    ></span
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--    About End    -->

    <!--   Testimonial   -->
    <?php include "includes/Testimonials.php"?>

    <!-- Count up -->
    <?php include "includes/Counter.php"?>

    <!--   Blog   -->
    <?php include "includes/Blog.php"?>

    <!--   Banner  -->
    <?php include "includes/Banner.php"?>

    <!--   Contact   -->
    <?php include "includes/Contact.php"?>

    <!--   Footer  -->
    <?php include "includes/Footer.php"?>



    <!-- SCRIPTS start Here -->
    <!--  JavaScripts  -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <!--  Plugins JS  -->
    <script src="assets/js/plugins.js"></script>
    <!-- Map Js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRemITiP7JRWpZwLhVt-T2x5MeUFE2KWs"></script>
    <!--  Custom JS  -->
    <script src="assets/js/uone.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
      var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
      (function () {
        var s1 = document.createElement("script"),
          s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = "https://embed.tawk.to/5fa3bdc4fe038e7c95aa3174/default";
        s1.charset = "UTF-8";
        s1.setAttribute("crossorigin", "*");
        s0.parentNode.insertBefore(s1, s0);
      })();
    </script>
    <!--End of Tawk.to Script-->

    <script src="assets/js/rtr.js"></script>
  </body>
</html>
