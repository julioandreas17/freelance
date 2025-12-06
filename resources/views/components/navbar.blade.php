<div class="stand-menu-top position-relative w-100 bg-white">
  <div class="menu-top position-relative bg-white w-100 pb-3">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-auto logo-area">
          <a href="{!! url('./') !!}" class="text-decoration-none d-block">
            <div class="row d-flex align-items-center">
              <div class="col-auto mt-3">
                <img src="{!! url(env('ICON').''.$version) !!}" style="border-radius: 10px;width: 60px;">
              </div>
              <div class="col-auto mt-3 px-0">
                <div class="text-primary fw-bold">
                  PT. SELARAS ENERGI <span class="text-secondary">ELEKTRIKAL</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col mt-3">&nbsp;</div>
        <div class="col-auto menu-area">
          <div class="row d-flex align-items-center">
            <div class="col-auto mt-3">
              <a href="{!! url('./') !!}" class="text-decoration-none d-block">
                <div class="position-relative">
                  <div class="position-absolute start-0 end-0 bottom-0 rounded-pill bg-primary" style="height: 2px;"></div>
                  <div class="text-primary p-2 text-truncate" style="border-radius: 5px;">
                    Home
                  </div>
                </div>
              </a>
            </div>
            <div class="col-auto mt-3">
              <a href="{!! url('/about_us') !!}" class="text-decoration-none d-block">
                <div class="position-relative">
                  <div class="text-secondary p-2 text-truncate" style="border-radius: 5px;">
                    About Us
                  </div>
                </div>
              </a>
            </div>
            <div class="col-auto mt-3">
              <a href="{!! url('/our_products') !!}" class="text-decoration-none d-block">
                <div class="position-relative">
                  <div class="text-secondary p-2 text-truncate" style="border-radius: 5px;">
                    Our Products
                  </div>
                </div>
              </a>
            </div>
            <div class="col-auto mt-3">
              <a href="{!! url('/contact_us') !!}" class="text-decoration-none d-block">
                <div class="position-relative">
                  <div class="text-secondary p-2 text-truncate" style="border-radius: 5px;">
                    Contact Us
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-auto theme-area">
          <div class="row d-flex align-items-center">
            <div class="col-auto mt-3">
              <i class="bi bi-sun text-secondary"></i>
            </div>
            <div class="col-auto mt-3 px-0">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="theme" name="theme">
              </div>
            </div>
            <div class="col-auto mt-3">
              <i class="bi bi-moon-stars text-secondary"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>