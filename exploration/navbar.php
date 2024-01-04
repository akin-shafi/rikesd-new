<div id="navigation">
    <ul class="navigation-menu">
      <div class="menu-small sm-screen">
        <li>
          <a class="sub-menu-item fw-size" to="/">Hj';;[p=--ome</a>
          <!-- <a class="sub-menu-item fw-size" href="/">Home</a> -->
        </li>
      </div>
      <li>
        <a href="https://gettonote.com/about" class="sub-menu-item fw-size" exact
          >About Us</a
        >
      </li>
      <li class="has-submenu parent-parent-menu-item" @click="dropSolution">
        <a href="javascript:void(0)" class="fw-size">Solutions</a
        ><span class="menu-arrow"></span>

        <ul class="submenu" :class="{ 'd-block': openSolution }">
          <li>
            <a
              href="https://gettonote.com/solution/tosign"
              class="sub-menu-item fw-size"
              exact
            >
              <div class="row">
                <div class="col-2">
                  <span
                    ><img src="assets/images/icon/icon-sign.png" width="15"
                  /></span>
                </div>
                <div class="col-6"><span>ToSign</span></div>
                <div class="col-4 text-end">
                  <span><Icon icon="akar-icons:arrow-right" /></span>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a
              href="https://gettonote.com/solution/tonotarise"
              class="sub-menu-item fw-size"
              exact
            >
              <div class="row">
                <div class="col-2">
                  <span
                    ><img src="assets/images/icon/icon-note.png" width="15"
                  /></span>
                </div>
                <div class="col-6"><span>ToNotarise</span></div>
                <div class="col-4 text-end">
                  <span><Icon icon="akar-icons:arrow-right" /></span>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a
              href="https://gettonote.com/solution/toverify"
              class="sub-menu-item fw-size"
              exact
            >
              <div class="row">
                <div class="col-2">
                  <span
                    ><img src="assets/images/icon/icon-verify.png" width="15"
                  /></span>
                </div>
                <div class="col-6"><span>ToVerify</span></div>
                <div class="col-4 text-end">
                  <span><Icon icon="akar-icons:arrow-right" /></span>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a
          href="https://gettonote.com/pricing"
          class="sub-menu-item fw-size"
          exact
          >Pricing</a
        >
      </li>
      <li>
        <a
          href="https://gettonote.com/notary"
          class="sub-menu-item fw-size"
          exact
          >For Notaries</a
        >
      </li>
      <li class="has-submenu parent-parent-menu-item" @click="dropResource">
        <a href="javascript:void(0)" class="fw-size">Resources</a
        ><span class="menu-arrow"></span>
        <ul class="submenu" :class="{ 'd-block': openResource }">
          <li>
            <a
              href="https://gettonote.com/resources/partners"
              class="sub-menu-item fw-size d-flex justify-content-between"
              exact
            >
              <span>Partners</span>
              <Icon icon="akar-icons:arrow-right" />
            </a>
          </li>
          <li class="">
            <a
              href="https://gettonote.com/blog"
              class="sub-menu-item fw-size d-flex justify-content-between"
              exact
            >
              <span>Blog</span>
              <Icon icon="akar-icons:arrow-right" />
            </a>
          </li>
          <li>
            <a
              href="https://gettonote.com/resources/faq"
              class="sub-menu-item fw-size d-flex justify-content-between"
              exact
            >
              <span>FAQs</span>
              <Icon icon="akar-icons:arrow-right" />
            </a>
          </li>
        </ul>
      </li>
    </ul>
    <div class="menu-small sm-screen">
      <li class="btn btn-sm btn-outline-primary p-0">
        <a
          href="https://user.gettonote.com"
          target="_blank"
          class="text fw-size"
          >Sign In</a
        >
      </li>

      <li class="btn btn-sm btn-primary my-1 p-0">
        <a
          href="https://user.gettonote.com/register"
          target="_blank"
          class="sub-menu-item fw-size text-light"
        >
          Start free trial
        </a>
      </li>
    </div>
  </div>