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

    <!-- 
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="{!! url('./') !!}">
    <meta name="twitter:title" content="{{ env('TITLE') }}">
    <meta name="twitter:description" content="{{ env('DESCRIPTION') }}">
    <meta name="twitter:image" content="{!! url(env('LOGO').''.$version) !!}">
     -->

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

    @include('components.navbar')
    @include('components.header')
    @include('components.about')
    @include('components.services')
    @include('components.products')
    @include('components.contact')
    @include('cookies')

    <div class="splash position-fixed start-0 end-0 top-0 bottom-0 overflow-hidden" style="z-index: 9;">
      <div class="position-absolute start-0 end-0 top-0 bottom-0 bg-primary"></div>
      <div class="position-absolute start-0 end-0 top-0 bottom-0 d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
              <div class="position-relative w-100 p-3">
                <div class="position-relative w-100">
                  <img src="{!! url(env('LOGO')) !!}" class="w-100" style="opacity: 0;">
                  <div class="position-absolute start-0 end-0 top-0 bottom-0 bx-flashing" style="background-size: contain;background-position: center;background-repeat: no-repeat;background-image: url({!! url(env('LOGO')) !!});filter: grayscale(1) brightness(100);"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script>
      var URL = '{!! url('./') !!}';
    </script>
    <script src="{!! url('vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js'.$version) !!}"></script>
    <script src="{!! url('public/js/sweetalert.min.js'.$version) !!}"></script>
    <script src="{!! url('node_modules/aos/dist/aos.js'.$version) !!}"></script>
    <script src="{!! url('public/js/script.js'.$version) !!}"></script>
  </body>
</html>