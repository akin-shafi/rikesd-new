
        <footer class="footer bg-dark text-light">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="footer-py-60">
                    <div class="row">
                      <div class="col-lg-6 col-12 mb-0 mb-md-4 py-3">
                        <a :to="{ name: 'Home' }" class="logo-footer" exact>
                          <img
                            src="assets/images/logo-b-light.png"
                            height="24"
                            alt="ToNote Brand"
                          />
                        </a>
                      </div>
                      <div
                        class="col-lg-6 col-12 mb-0 mb-md-8 d-flex justify-content-lg-end"
                      >
                        <div class="w-100 lg-screen">
                          <div class="input-group mb-3 myinput-wrap p-1 rounded">
                            <input
                              type="text"
                              class="form-control border-0"
                              placeholder="Enter your email here"
                              aria-label="Search"
                              aria-describedby="basic-addon2"
                            />
                            <div class="input-group-append">
                              <span class="btn btn-light" id="basic-addon2"
                                >Follow our Journey</span
                              >
                            </div>
                          </div>
                        </div>

                        <div class="w-100 sm-screen">
                          <div class="my-2">
                            <input
                              type="text"
                              class="form-control py-3"
                              placeholder="Enter your email here"
                              aria-label="Search"
                              aria-describedby="basic-addon2"
                              style="background: transparent; color: #fff !important"
                            />
                          </div>
                          <div class="mb-2">
                            <div class="btn btn-light w-100 py-3">
                              Follow our Journey
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                        <h5 class="text-light">About Us</h5>
                        <p class="mt-4">
                          Today, we help people sign, notarise, verify and manage
                          documents, fully online.
                        </p>
                      </div>

                      <div
                        class="col-lg-2 col-md-4 col col-12 mt-4 mt-sm-0 pt-2 pt-sm-0"
                      >
                        <h5 class="text-light">Solutions</h5>
                        <ul class="list-unstyled footer-list mt-4">
                          <li>
                            <a href="#basic" class="text-foot">For Individuals</a>
                          </li>
                          <li>
                            <a href="#pro" class="text-foot">For Teams</a>
                          </li>
                          <li>
                            <a href="#business" class="text-foot"> For Business</a>
                          </li>

                          <li>
                            <a
                              :to="{ name: 'resource.partners' }"
                              class="text-foot"
                              exact
                            >
                              <span>Partners</span> <span class="submenu-arrow"></span>
                            </a>
                          </li>
                        </ul>
                      </div>

                      <div
                        class="col-lg-2 col-md-4 col col-12 mt-4 mt-sm-0 pt-2 pt-sm-0"
                      >
                        <h5 class="text-light">Support</h5>
                        <ul class="list-unstyled footer-list mt-4">
                          <li>
                            <a
                              :to="{ name: 'resource.faq' }"
                              class="text-foot"
                              exact
                            >
                              FAQs</a
                            >
                          </li>
                          <li>
                            <a
                              :to="{ name: 'resource.blog' }"
                              class="text-foot"
                              exact
                            >
                              Blog</a
                            >
                          </li>

                          <li>
                            <a :to="{ name: 'contact' }" class="text-foot">
                              Contact Us</a
                            >
                          </li>
                        </ul>
                      </div>

                      <div
                        class="col-lg-2 col-md-4 col col-12 mt-4 mt-sm-0 pt-2 pt-sm-0"
                      >
                        <h5 class="text-light">Legals</h5>
                        <ul class="list-unstyled footer-list mt-4">
                          <li>
                            <a :to="{ name: 'Privacy' }" class="text-foot">
                              Privacy Policy</a
                            >
                          </li>
                          <li>
                            <a :to="{ name: 'Terms' }" class="text-foot">
                              Terms of Use</a
                            >
                          </li>

                          <li>
                            <a href="javascript:void(0)" class="text-foot">
                              Cookies Policy</a
                            >
                          </li>
                        </ul>
                      </div>

                      <div
                        class="col-lg-3 col-md-4 col col-12 mt-4 mt-sm-0 pt-2 pt-sm-0"
                      >
                        <ul class="list-unstyled social-icon foot-social-icon mb-0">
                          <li class="list-inline-item me-1">
                            <a
                              href="https://www.instagram.com/mytonote/"
                              class="rounded"
                            >
                              <Icon icon="akar-icons:instagram-fill" />
                            </a>
                          </li>
                          <li class="list-inline-item me-1">
                            <a
                              href="https://twitter.com/gettonote?s=11"
                              class="rounded"
                            >
                              <Icon icon="iconoir:twitter" />
                            </a>
                          </li>
                          <li class="list-inline-item me-1">
                            <a
                              href="https://www.linkedin.com/company/gettonote"
                              class="rounded"
                            >
                              <Icon icon="akar-icons:linkedin-fill" />
                            </a>
                          </li>
                        </ul>
                        <p class="mt-4">
                          1625B Saka Jojo Street, off Idejo Victoria Island, Lagos,
                          Nigeria
                        </p>
                        <div class="d-none">
                          <p class="h5 text-light">ToNote Inc.</p>

                          <div>8 The GRN STE A Dover DE 19901</div>
                        </div>
                        <div>+234 814 650 7035</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="footer-py-30 footer-bar">
              <div class="container text-center">
                <div class="row align-items-center">
                  <div class="col-sm-6">
                    <div class="text-sm-start">
                      <p class="mb-0">
                        ©
                        <?php echo date("Y"); ?>
                        ToNote Inc.
                      </p>
                    </div>
                  </div>

                  <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0 d-none">
                    
                  </div>
                </div>
              </div>
            </div>
          </footer>