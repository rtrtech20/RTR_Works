<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8" />
    <title>RTR Technologies - Freelance Agency</title>
    <!-- Meta Tags start -->
    <meta
      name="description"
      content="RTR Technologies is a Trivandrum based tech firm. Our experienced team is capable of taking your ideas from the sketch board to deployment and maintenance."
    />
    <meta
      name="keywords"
      content="RTR Technologies, Website Development, SEO Services, Architectural Services, Building Plan, Graphic Designing"
    />
    <meta name="author" content="RTR Technologies" />

    <link rel="canonical" href="https://www.rtr-technologies.com/" />

    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="theme-color" content="#101010" />
    <!--website-favicon-->
    <link href="images/icon.png" rel="icon" />
    <!--plugin-css-->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/plugin.min.css" rel="stylesheet" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <!-- template-style-->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/rtr.css" />
    <style></style>
  </head>
  <body>
    <!--Start Preloader -->
    <div class="onloadpage" id="page_loader">
      <div class="pre-content">
        <div class="logo-pre">
          <img src="images/RTR-black.png" alt="Logo" class="img-fluid" />
        </div>
        <div class="pre-text-">
          <span>RTR Technologies - Freelance Agency is 2 Seconds Away.</span
          >Have Patience
        </div>
      </div>
    </div>
    <!--End Preloader -->

    <?php include "php/Header.php"?>
    <?php include "php/Hero.php"?>
    <?php include "php/About.php"?>
    <?php include "php/Services.php"?>
    <?php include "php/WorkCategory.php"?>
    <?php include "php/Client-reviews.php"?>
    <?php include "php/Clients.php"?>

    <?php include "php/Footer.php"?>
    <?php include "php/Modal.php"?>

    <!-- <div class="offers d-none d-md-block d-lg-block">
      <h4><a href="javascript:void(0);" data-toggle="modal" data-target="#christmas-offer">Offers</a></h4>
    </div>
    <div class="offer-icon d-lg-none d-md-none">
      <a href="javascript:void(0);" data-toggle="modal" data-target="#christmas-offer"><i class="fas fa-gift"></i></a>
    </div> -->

    <div class="popup-modals">
      <div class="modal" id="christmas-offer">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <div class="common-heading">
                <h4 class="mt0 mb0">Christmas Special Offer</h4>
              </div>
              <button
                type="button"
                id="close-btn"
                class="closes"
                data-dismiss="modal"
              >
                &times;
              </button>
            </div>
            <div class="modal-body">
              <img src="images/poster.jpg" class="img-fluid" alt="Offer" />
            </div>
            <a
              href="tel:+917012158497"
              class="btn-round-trngl btn-br bg-btn7 text-center mx-5 mb-3"
              >Avail Offer</a
            >
          </div>
        </div>
      </div>
    </div>

    <!--scroll to top-->
    <a id="scrollUp" href="#top"></a>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/plugin.min.js"></script>
    <script src="js/preloader.js"></script>
    <!--common script file-->
    <script src="js/main.js"></script>
    <script src="js/rtr.js"></script>

    <!-- <script src="js/ajax.form.js"></script> -->

    <script>
      $(document).ready(function () {
        if (localStorage.getItem("popState") != "shown") {
          function showWindow() {
            $("#christmas-offer").show();
            // stop scroll
            $("html body").css("overflow", "hidden");
          }

          setTimeout(hideWindow, 10000);

          function hideWindow() {
            $("#christmas-offer").hide();
            // start scroll
            $("html body").css("overflow", "scroll");
          }

          setTimeout(showWindow, 2000);

          $("#close-btn").click(function () {
            hideWindow();
          });

          localStorage.setItem("popState", "shown");
        }
      });
    </script>
  </body>
</html>
