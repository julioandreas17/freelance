@php
  $version = '?v='.date('YmdHis');
@endphp

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ env('DESCRIPTION') }}">
    <meta name="theme-color" content="{{ env('COLOR_PRIMARY') }}">

    <meta property="og:url" content="{!! url('./') !!}">
    <meta property="og:title" content="{{ env('TITLE') }}">
    <meta property="og:description" content="{{ env('DESCRIPTION') }}">
    <meta property="og:type" content="article">
    <meta property="og:image" content="{!! url(env('LOGO').''.$version) !!}">
    <meta property="og:image:type" content="image/png">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="{!! url('./') !!}">
    <meta name="twitter:title" content="{{ env('TITLE') }}">
    <meta name="twitter:description" content="{{ env('DESCRIPTION') }}">
    <meta name="twitter:image" content="{!! url(env('LOGO').''.$version) !!}">

    <title>{{ env('TITLE') }}</title>
    <link rel="shortcut icon" href="{!! url(env('ICON').''.$version) !!}" type="image/x-icon">
    <link rel="stylesheet" href="{!! url('vendor/twbs/bootstrap/dist/css/bootstrap.min.css'.$version) !!}">
    <link rel="stylesheet" href="{!! url('vendor/twbs/bootstrap-icons/font/bootstrap-icons.min.css'.$version) !!}">
    <link rel="stylesheet" href="{!! url('node_modules/boxicons/css/boxicons.min.css'.$version) !!}">
    <link rel="stylesheet" href="{!! url('node_modules/aos/dist/aos.css'.$version) !!}">
    <link rel="stylesheet" href="{!! url('public/css/style.css'.$version) !!}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <script src="{!! url('public/js/jquery.min.js'.$version) !!}"></script>
  </head>
  <body style="background: #ecf0f1;">

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

    <div class="header position-relative w-100 pt-5">
      <div class="position-absolute start-0 end-0 top-0 bottom-0" style="background: url({!! url('public/images/header.jpg'.$version) !!});background-size: cover;background-position: center;background-repeat: no-repeat;"></div>
      <div class="position-absolute start-0 end-0 top-0 bottom-0 bg-dark" style="opacity: 0.5;"></div>
      <div class="container position-relative">
        <div class="position-absolute start-0 top-0 bottom-0 bg-white my-5" style="width: 4px;border-radius: 100px;"></div>
        <div class="row position-relative">
          <div class="col-8">
            <div class="fs-1 text-white ps-4">
              Committed to providing the best solutions in the <span class="bg-white text-primary py-1 px-3" style="border-radius: 10px;">Electricity</span> sector, we prioritize professionalism, quality workmanship, reliability, and safety in every project.
            </div>
          </div>
        </div>
      </div>
      <div class="position-relative w-100" align="center" style="margin-top: -50px;">
        <img src="{!! url('public/images/waves.svg'.$version) !!}" alt="waves" class="w-100">
      </div>
    </div>

    <div class="about-us position-relative w-100 py-5">
      <div class="container">
        <div class="position-relative w-100">
          <div class="position-absolute start-0 end-0 bottom-0 bg-primary rounded-pill mx-auto" style="height: 4px;width: 30px;"></div>
          <div class="fs-1 position-relative pb-3" align="center">
            Here We Are
          </div>
        </div>
        <div class="row d-flex justify-content-center mt-3">
          <div class="col-auto">
            
            <div class="position-relative rounded-pill p-1">
              <div class="row d-flex align-items-center justify-content-center">
                <div class="col-auto">
                  <div role="button" class="bg-primary position-relative rounded-pill py-1 px-3 text-white">
                    <div class="fs-6">About Us</div>
                  </div>
                </div>
                <div class="col-auto">
                  <div role="button" class="position-relative rounded-pill py-1 px-3 text-primary">
                    <div class="fs-6">Vision & Mision</div>
                  </div>
                </div>
                <div class="col-auto">
                  <div role="button" class="position-relative rounded-pill py-1 px-3 text-primary">
                    <div class="fs-6">Company Values</div>
                  </div>
                </div>
                <div class="col-auto">
                  <div role="button" class="position-relative rounded-pill py-1 px-3 text-primary">
                    <div class="fs-6">Organizational Structure</div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="position-relative w-100 mt-5">
          <div class="position-absolute end-0 top-0 bottom-0 w-50 overflow-hidden" style="border-radius: 20px;background: url({!! url('public/images/about.jpg') !!});background-size: cover;background-position: center;background-repeat: no-repeat;"></div>
          <div class="row position-relative">
            <div class="col-6">
              <div class="fs-5 pe-2" style="text-align: justify;">
                <b class="text-primary">PT SELARAS ENERGI ELEKTRIKAL</b> is a company engaged in contracting, engineering, electrical material procurement, as well as providing consulting and training services in the electrical power sector. 
                Established with a commitment to delivering the best solutions in the power industry, we prioritize professionalism, work quality, reliability, and safety in every project we undertake.
              </div>
              <div class="fs-6 mt-3 pe-2" style="text-align: justify;">
                With the support of certified experts and extensive experience in handling various industrial, commercial, and infrastructure projects, 
                we serve as a trusted partner in fulfilling electrical power needs in accordance with national standards (SNI), SPLN, and international standards.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="{!! url('vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js'.$version) !!}"></script>
    <script src="{!! url('node_modules/aos/dist/aos.js'.$version) !!}"></script>
    <script src="{!! url('public/js/script.js'.$version) !!}"></script>
  </body>
</html>