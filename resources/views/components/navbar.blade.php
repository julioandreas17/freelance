<div class="stand-menu-top home position-relative w-100 bg-white">
  <div class="menu-top position-relative bg-white w-100 pb-3">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-12 col-sm-12 col-md-auto col-lg-auto col-xl-auto logo-area">
          <a href="{!! url('./') !!}" class="text-decoration-none">
            <div class="row d-flex align-items-center">
              <div class="col-auto mt-3 pe-0">
                <img src="{!! url(env('ICON').''.$version) !!}" style="border-radius: 10px;width: 60px;">
              </div>
              <div class="col-auto mt-3">
                <div class="text-primary fw-bold text-truncate fs-6">
                  PT. SELARAS ENERGI <span class="text-secondary">ELEKTRIKAL</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col mt-3 d-none d-sm-none d-md-block d-lg-block d-xl-block">&nbsp;</div>
        <div class="col-auto menu-area d-none d-sm-none d-md-none d-lg-block d-xl-block">
          <div class="row d-flex align-items-center">
            <div class="col-auto mt-3">
              <a href="home" class="text-decoration-none d-block link">
                <div class="position-relative">
                  <div class="hover position-absolute start-0 end-0 bottom-0 rounded-pill bg-primary" style="height: 2px;"></div>
                  <div class="title text-primary p-2 text-truncate" style="border-radius: 5px;">
                    Home
                  </div>
                </div>
              </a>
            </div>
            <div class="col-auto mt-3">
              <a href="about-us" class="text-decoration-none d-block link">
                <div class="position-relative">
                  <div class="hover position-absolute start-0 end-0 bottom-0 rounded-pill bg-primary" style="height: 2px;display: none;"></div>
                  <div class="title text-secondary p-2 text-truncate" style="border-radius: 5px;">
                    About
                  </div>
                </div>
              </a>
            </div>
            <div class="col-auto mt-3">
              <a href="services" class="text-decoration-none d-block link">
                <div class="position-relative">
                  <div class="hover position-absolute start-0 end-0 bottom-0 rounded-pill bg-primary" style="height: 2px;display: none;"></div>
                  <div class="title text-secondary p-2 text-truncate" style="border-radius: 5px;">
                    Services
                  </div>
                </div>
              </a>
            </div>
            <div class="col-auto mt-3">
              <a href="products" class="text-decoration-none d-block link">
                <div class="position-relative">
                  <div class="hover position-absolute start-0 end-0 bottom-0 rounded-pill bg-primary" style="height: 2px;display: none;"></div>
                  <div class="title text-secondary p-2 text-truncate" style="border-radius: 5px;">
                    Products
                  </div>
                </div>
              </a>
            </div>
            <div class="col-auto mt-3">
              <a href="contact" class="text-decoration-none d-block link">
                <div class="position-relative">
                  <div class="hover position-absolute start-0 end-0 bottom-0 rounded-pill bg-primary" style="height: 2px;display: none;"></div>
                  <div class="title text-secondary p-2 text-truncate" style="border-radius: 5px;">
                    Contact
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mobile-menu position-fixed start-0 end-0 bottom-0 d-block d-sm-block d-md-block d-lg-none d-xl-none" style="z-index: 2;">
  <div class="position-relative w-100">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-auto">

          <div class="position-relative w-100 p-3">
            <div class="position-relative w-100 bg-white shadow px-3" style="border-radius: 15px;zoom: 60%;">

              <div class="row">
                <div class="col-auto">
                  <div class="position-relative w-100 p-3 item" role="button" action="about-us">
                    <div class="fs-1" align="center">
                      <i class="bi bi-buildings"></i>
                    </div>
                    <div align="center">
                      About
                    </div>
                  </div>
                </div>
                
                <div class="col-auto">
                  <div class="position-relative w-100 p-3 item" role="button" action="services">
                    <div class="fs-1" align="center">
                      <i class="bi bi-briefcase"></i>
                    </div>
                    <div align="center">
                      Services
                    </div>
                  </div>
                </div>

                <div class="col-auto">
                  <div class="position-relative w-100 p-3 item" role="button" action="products">
                    <div class="fs-1" align="center">
                      <i class="bi bi-box-seam"></i>
                    </div>
                    <div align="center">
                      Products
                    </div>
                  </div>
                </div>

                <div class="col-auto">
                  <div class="position-relative w-100 p-3 item" role="button" action="contact">
                    <div class="fs-1" align="center">
                      <i class="bi bi-headset"></i>
                    </div>
                    <div align="center">
                      Contact
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>