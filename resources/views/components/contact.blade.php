<div class="contact position-relative w-100 py-5 pb-0">
  <div class="container">
    <div class="position-relative w-100">
      <div class="position-absolute start-0 end-0 bottom-0 bg-primary rounded-pill mx-auto" style="height: 4px;width: 30px;"></div>
      <div class="fs-2 position-relative pb-3" align="center">
        We’re Here to Assist You
      </div>
    </div>
  </div>
  <div class="position-relative w-100 mt-5">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 order-1 order-sm-1 order-md-1 order-lg-2 order-xl-2 px-0">
        <div class="position-relative w-100 h-100 bg-white p-5">
          <div class="fs-2" align="center">
            Get in <span class="bg-primary text-white py-1 px-3" style="border-radius: 10px;">Touch</span>
          </div>
          <div class="mt-5 mb-2">
            <b class="text-danger">*</b> Fullname :
          </div>
          <input type="text" class="form-control form-control-lg" name="fullname" placeholder="Type your fullname ...">
          <div class="mt-3 mb-2">
            <b class="text-danger">*</b> Email :
          </div>
          <input type="email" class="form-control form-control-lg" name="email" placeholder="Type your email ...">
          <div class="mt-3 mb-2">
            <b class="text-danger">*</b> Message :
          </div>
          <textarea name="message" id="message" class="form-control form-control-lg" style="height: 200px;" placeholder="Tell us what your need ..."></textarea>
          <div class="w-100 mt-3" align="center">
            <button type="button" class="btn btn-primary bg-primary btn-lg w-100 rounded-pill">
              Send Request <i class="bi bi-send"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 order-2 order-sm-2 order-md-2 order-lg-1 order-xl-1 px-0">
        <div class="position-relative w-100 h-100">
          <div class="position-relative w-100 d-block d-sm-block d-md-block d-lg-none d-xl-none" style="height: 400px;"></div>
          <div class="position-absolute start-0 end-0 top-0 bottom-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.089239136907!2d106.8327928!3d-6.2519718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f30043690f0d%3A0x4a0c37b064b95099!2sPT%20SELARAS%20ENERGI%20ELEKTRIKAL!5e0!3m2!1sen!2sid!4v1765179447012!5m2!1sen!2sid" style="border:0;width: 100%;height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="position-relative w-100 py-5 bg-dark">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
        <div class="position-relative w-100 h-100 p-2">
          <div class="position-relative w-100 h-100">
            <div class="position-relative w-100 d-block d-sm-block d-md-block d-lg-none d-xl-none" align="center">
              <img src="{!! url(env('LOGO')) !!}" alt="logo" class="img-responsive" style="opacity: 0;width: 180px;">
            </div>
            <div class="position-absolute start-0 end-0 top-0 bottom-0" style="background-size: contain;background-position: center;background-repeat: no-repeat;background-image: url({!! url(env('LOGO')) !!});filter: grayscale(1) brightness(100);"></div>
          </div>
        </div>
      </div>
      <div class="col-12 d-block d-sm-block d-md-block d-lg-none d-xl-none">
        <div class="position-relative w-100" style="height: 50px;"></div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
        <div class="position-relative w-100 p-2">
          <div class="fs-5 text-white">
            More Details
          </div>
          <div class="mt-3 text-white" style="font-size: 13px;">
            Open WhatsApp :
          </div>
          @for($count = 1; $count <= 3; $count ++)
          
          <div class="position-relative mt-2">
            <a href="https://wa.me/{!! str_replace(array('+', '-'), array('', ''), env('PHONE_0'.$count, '-')) !!}" target="_blank" class="text-decoration-none btn btn-success w-100 rounded-pill">
              <i class="bi bi-whatsapp"></i> {{ env('PHONE_0'.$count, '-') }}
            </a>
          </div>

          @endfor
          <div class="mt-3 text-white" style="font-size: 13px;">
            Email :
          </div>
          <div class="text-white">
            {{ env('EMAIL', '-') }}
          </div>
          <div class="mt-2 text-white" style="font-size: 13px;">
            Address :
          </div>
          <div class="text-white">
            {{ env('ADDRESS', '-') }}
          </div>
        </div>
      </div>
      <div class="col-12 d-block d-sm-block d-md-none d-lg-none d-xl-none">
        <div class="position-relative w-100" style="height: 40px;"></div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
        <div class="position-relative w-100">
          <div class="fs-5 text-white">
            Connect with Us
          </div>
          <div class="mt-3">
            <a href="{!! url('./') !!}" class="text-decoration-none btn btn-outline-light w-100 rounded-pill">
              <i class="bi bi-facebook"></i> &nbsp; Facebook
            </a>
          </div>
          <div class="mt-2">
            <a href="{!! url('./') !!}" class="text-decoration-none btn btn-outline-light w-100 rounded-pill">
              <i class="bi bi-instagram"></i> &nbsp; Instagram
            </a>
          </div>
          <div class="mt-2">
            <a href="{!! url('./') !!}" class="text-decoration-none btn btn-outline-light w-100 rounded-pill">
              <i class="bi bi-linkedin"></i> &nbsp; LinkedIn
            </a>
          </div>
          <div class="mt-2">
            <a href="{!! url('./') !!}" class="text-decoration-none btn btn-outline-light w-100 rounded-pill">
              <i class="bi bi-youtube"></i> &nbsp; Youtube
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 mt-5">
        <div class="text-white" align="center">
          &copy; Copyright {!! date('Y') !!} All Right Reserved
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 
<div class="position-relative w-100 py-5 bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-4 mt-3 position-relative">
        <div class="position-absolute start-0 end-0 top-0 bottom-0 w-75" style="background-size: contain;background-position: center;background-repeat: no-repeat;background-image: url({!! url(env('LOGO')) !!});filter: grayscale(1) brightness(100);"></div>
      </div>
      <div class="col-4 mt-3">
        <div class="fs-4 text-white">
          More Details
        </div>
        <div class="mt-3 text-white" style="font-size: 13px;">
          Phone 01 :
        </div>
        <div class="text-white">
          {{ env('PHONE_01', '-') }}
        </div>
        <div class="mt-2 text-white" style="font-size: 13px;">
          Phone 02 :
        </div>
        <div class="text-white">
          {{ env('PHONE_02', '-') }}
        </div>
        <div class="mt-2 text-white" style="font-size: 13px;">
          Phone 03 :
        </div>
        <div class="text-white">
          {{ env('PHONE_03', '-') }}
        </div>
        <div class="mt-2 text-white" style="font-size: 13px;">
          Email :
        </div>
        <div class="text-white">
          {{ env('EMAIL', '-') }}
        </div>
        <div class="mt-2 text-white" style="font-size: 13px;">
          Address :
        </div>
        <div class="text-white">
          {{ env('ADDRESS', '-') }}
        </div>
      </div>
      <div class="col-4 mt-3">
        <div class="fs-4 text-white">
          Connect with Us
        </div>
        <div class="mt-3">
          <a href="{!! url('./') !!}" class="text-decoration-none btn btn-outline-light w-100 rounded-pill">
            <i class="bi bi-facebook"></i> &nbsp; Facebook
          </a>
        </div>
        <div class="mt-2">
          <a href="{!! url('./') !!}" class="text-decoration-none btn btn-outline-light w-100 rounded-pill">
            <i class="bi bi-instagram"></i> &nbsp; Instagram
          </a>
        </div>
        <div class="mt-2">
          <a href="{!! url('./') !!}" class="text-decoration-none btn btn-outline-light w-100 rounded-pill">
            <i class="bi bi-linkedin"></i> &nbsp; LinkedIn
          </a>
        </div>
        <div class="mt-2">
          <a href="{!! url('./') !!}" class="text-decoration-none btn btn-outline-light w-100 rounded-pill">
            <i class="bi bi-youtube"></i> &nbsp; Youtube
          </a>
        </div>
      </div>
      <div class="col-12 mt-5">
        <div class="text-white" align="center">
          &copy; Copyright {!! date('Y') !!} All Right Reserved
        </div>
      </div>
    </div>
  </div>
</div>
 -->

<!--  
<div class="contact position-relative w-100 py-5 pb-0">
  <div class="container">
    <div class="position-relative w-100">
      <div class="position-absolute start-0 end-0 bottom-0 bg-primary rounded-pill mx-auto" style="height: 4px;width: 30px;"></div>
      <div class="fs-2 position-relative pb-3" align="center">
        We’re Here to Assist You
      </div>
    </div>
  </div>
  <div class="position-relative w-100 mt-5">
    <div class="row">
      <div class="col-6 position-relative px-0">
        <div class="position-absolute start-0 end-0 top-0 bottom-0 overflow-hidden">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.089239136907!2d106.8327928!3d-6.2519718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f30043690f0d%3A0x4a0c37b064b95099!2sPT%20SELARAS%20ENERGI%20ELEKTRIKAL!5e0!3m2!1sen!2sid!4v1765179447012!5m2!1sen!2sid" style="border:0;width: 100%;height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="col-6 px-0">
        <div class="position-relative w-100 bg-white p-5">
          <div class="fs-2" align="center">
            Get in <span class="bg-primary text-white py-1 px-3" style="border-radius: 10px;">Touch</span>
          </div>
          <div class="mt-5 mb-2">
            <b class="text-danger">*</b> Fullname :
          </div>
          <input type="text" class="form-control form-control-lg" name="fullname" placeholder="Type your fullname ...">
          <div class="mt-3 mb-2">
            <b class="text-danger">*</b> Email :
          </div>
          <input type="email" class="form-control form-control-lg" name="email" placeholder="Type your email ...">
          <div class="mt-3 mb-2">
            <b class="text-danger">*</b> Message :
          </div>
          <textarea name="message" id="message" class="form-control form-control-lg" style="height: 200px;" placeholder="Tell us what your need ..."></textarea>
          <div class="w-100 mt-3" align="center">
            <button type="button" class="btn btn-primary bg-primary btn-lg w-100 rounded-pill">
              Send Request <i class="bi bi-send"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
-->