<div class="about-us position-relative w-100 py-5">
  <div class="container">
    <div class="position-relative w-100">
      <div class="position-absolute start-0 end-0 bottom-0 bg-primary rounded-pill mx-auto" style="height: 4px;width: 30px;"></div>
      <div class="fs-2 position-relative pb-3" align="center">
        Here We Are
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-auto">
        
        <div class="position-relative rounded-pill p-1">
          <div class="row d-flex align-items-center justify-content-center">
            <div class="col-auto mt-3">
              <div role="button" class="bg-primary position-relative rounded-pill py-1 px-3 text-white" target="about">
                <div class="fs-6">About Us</div>
              </div>
            </div>
            <div class="col-auto mt-3">
              <div role="button" class="position-relative rounded-pill py-1 px-3 text-primary" target="company_values">
                <div class="fs-6">Company Values</div>
              </div>
            </div>
            <div class="col-auto mt-3">
              <div role="button" class="position-relative rounded-pill py-1 px-3 text-primary" target="organization_structure">
                <div class="fs-6">Organizational Structure</div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    @include('components/about/about')
    @include('components/about/nilai_perusahaan')
    @include('components/about/struktur_organisasi')

  </div>
</div>