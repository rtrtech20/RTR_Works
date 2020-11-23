<!--   Contact Start   -->
<section id="contact" class="contact text-center py-6">
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
          <div class="col-lg-12 text-md-left text-center">
            <div class="col-lg-12 mt-5 contact-form">
              <h4>Come & Work With Us</h4>
              <p class="text-muted">
                Are constantly thriving . It’s not enough trust in the cleaning.
              </p>
              <form id="contactForm">
                <div class="row">
                  <div class="col-lg-4 col-sm-6 form-item">
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
                  <div class="col-lg-4 col-sm-6 form-item">
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
                  <div class="col-lg-4 col-sm-6 form-item">
                    <div class="form-group">
                      <input
                        name="phoneNumber"
                        id="phoneNumber"
                        type="text"
                        class="form-control"
                        placeholder="Your Phone Number"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 form-item">
                    <div class="form-group">
                      <label for="cars">Choose a product: </label>
                      <select name="products" id="productList" required>
                        <option value="Select a product">
                          Select a product
                        </option>
                        <option value="On-Grid Solar Power Plants">
                          On-Grid Solar Power Plants
                        </option>
                        <option value="Off-Grid Solar Power Plants">
                          Off-Grid Solar Power Plants
                        </option>
                        <option value="UPS">UPS</option>
                        <option value="Inverter">Inverter</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 form-item">
                    <div class="form-group">
                      <input
                        name="capacity"
                        id="capacity"
                        type="text"
                        class="form-control"
                        placeholder="Capacity*"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 form-item">
                    <div class="form-group">
                      <input
                        name="location"
                        id="location"
                        type="text"
                        class="form-control"
                        placeholder="Your Location*"
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
                      Get a Quote
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
