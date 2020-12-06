<!--Start Header -->
<header class="nav-bg-w main-header navfix fixed-top menu-white">
  <div class="container-fluid m-pad">
    <div class="menu-header">
      <div class="dsk-logo">
        <a class="nav-brand" href="/">
          <img src="images/RTR-black.png" alt="Logo" class="mega-darks-logo" />
        </a>
      </div>
      <div class="custom-nav" role="navigation">
        <ul class="nav-list onepge">
          <li><a href="#home" class="menu-links">Home</a></li>
          <li><a href="#about" class="menu-links">About</a></li>
          <li><a href="#services" class="menu-links">Services</a></li>
          <li><a href="#clients" class="menu-links">Clients</a></li>
          <li>
            <a
              href="javascript:void(0);"
              data-toggle="modal"
              data-target="#menu-popup"
              class="menu-links"
              >Contact Us</a
            >
          </li>
          <li class="contact-show">
            <a href="javascript:void(0);" class="btn-round-trngl btn-br bg-btn7"
              ><i class="fas fa-phone-alt"></i
            ></a>
            <div class="contact-inquiry">
              <div class="contact-info-">
                <div class="contct-heading">RTR Contacts</div>
                <div class="inquiry-card-nn hrbg">
                  <div class="title-inq-c">FOR HR DEPARTMENT</div>
                  <ul>
                    <li class="mb0">
                      <img
                        src="images/flags/in.svg"
                        alt="our office"
                        class="flags-size"
                      />
                      <a href="tel:7907060312">+91-790-706-0312</a>
                    </li>
                  </ul>
                </div>
                <div class="inquiry-card-nn">
                  <ul>
                    <li>
                      <i class="fa fa-map-marker-alt"></i
                      ><a
                        href="https://g.page/rtr-tech-thiruvananthapuram/review?gm"
                        >RTR Technologies</a
                      >
                    </li>
                    <li class="contact-mail">
                      <i class="fas fa-envelope"></i
                      ><a href="mailto:help@rtr-technologies.com"
                        >help@rtr-technologies.com</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li>
            <a
              href="get-quote.html"
              class="btn-br bg-btn7 btshad-b2 lnk"
              data-toggle="modal"
              data-target="#menu-popup"
              >Request A Quote <span class="circle"></span
            ></a>
          </li>
        </ul>
      </div>
      <div class="mobile-menu2">
        <ul class="mob-nav2">
          <li>
            <a
              href="#"
              class="btn-round- trngl btn-br bg-btn7 btshad-b1"
              data-toggle="modal"
              data-target="#menu-popup"
              ><i class="fas fa-envelope-open-text"></i
            ></a>
          </li>
          <li class="navm-">
            <a class="toggle" href="#"><span></span></a>
          </li>
        </ul>
      </div>
    </div>
    <!--Mobile Menu-->
    <nav id="main-nav">
      <ul class="first-nav">
        <li><a href="#home" class="menu-links">Home</a></li>
        <li><a href="#about" class="menu-links">About</a></li>
        <li><a href="#services" class="menu-links">Services</a></li>
        <li><a href="#clients" class="menu-links">Clients</a></li>
      </ul>
      <ul class="bottom-nav">
        <li class="prb">
          <a href="tel:+918281592765">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
              <path
                d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
										c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
										c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
										C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z"
              />
            </svg>
          </a>
        </li>
        <li class="prb">
          <a href="mailto:help@rtr-technologies.com">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
            >
              <path
                d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"
              />
              <path d="M0 0h24v24H0z" fill="none" />
            </svg>
          </a>
        </li>
        <li class="prb">
          <a href="https://wa.me/c/917907060312" target="_blank">
            <i class="fab fa-whatsapp"></i>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</header>
<!--Mobile contact-->
<div class="popup-modal1">
  <div class="modal" id="menu-popup">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <div class="common-heading">
            <h4 class="mt0 mb0">Request A Quote</h4>
          </div>
          <button type="button" class="closes" data-dismiss="modal">
            &times;
          </button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-block fdgn2 mt10 mb10">
            <form
              action="mail.php"
              method="post"
              name="feedback-form"
              class="contact__form"
            >
              <!-- form message -->
              <div class="row">
                <div class="col-12">
                  <div
                    class="alert alert-success contact__msg"
                    style="display: none"
                    role="alert"
                  >
                    Your message was sent successfully.
                  </div>
                </div>
              </div>
              <!-- end message -->
              <div class="fieldsets row">
                <div class="col-md-12">
                  <input
                    type="text"
                    placeholder="Full Name *"
                    name="name"
                    required
                  />
                </div>
                <div class="col-md-12">
                  <input
                    type="email"
                    placeholder="Email Address *"
                    name="email"
                    required
                  />
                </div>
                <div class="col-md-12">
                  <input type="tel" placeholder="Contact Number" name="phone" />
                </div>
                <div class="col-md-12 form-group">
                  <select required="required">
                    <option value="">Interested In*</option>
                    <option value="Website Development">
                      Website Development
                    </option>
                    <option value="Graphic Design">Graphic Design</option>
                    <option value="Architectural Service">
                      Architectural Service
                    </option>
                    <option value="SEO Service">SEO Service</option>
                    <option value="CMS">CMS</option>
                    <option value="App Development">App Development</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
                <div class="col-md-12">
                  <textarea placeholder="Message" name="message"></textarea>
                </div>
              </div>
              <div class="fieldsets mt20 pb20">
                <button type="submit" name="submit" class="lnk btn-main bg-btn">
                  Submit <i class="fas fa-chevron-right fa-icon"></i
                  ><span class="circle"></span>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Mobile contact-->
<!--End Header -->
