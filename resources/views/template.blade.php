@php 
    $version = '?v='.date('YmdHis');
    $page = Request::segment(1);
    if ($page == ''){
      $page = 'home';
    }
@endphp
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ env('DESCRIPTION') }}">

    <meta property="og:url" content="{!! url('./') !!}">
    <meta property="og:title" content="{{ env('TITLE') }}">
    <meta property="og:description" content="{{ env('DESCRIPTION') }}">
    <meta property="og:type" content="article">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image" content="{!! url(env('ICON')) !!}">

    <title>{{ env('TITLE') }} :: {{ $page }}</title>
    <link rel="shortcut icon" href="{!! url(env('ICON')) !!}" type="image/x-icon">

    <link rel="stylesheet" href="{!! url('vendor/twbs/bootstrap/dist/css/bootstrap.min.css'.$version) !!}">
    <link rel="stylesheet" href="{!! url('vendor/twbs/bootstrap-icons/font/bootstrap-icons.min.css'.$version) !!}">
    <link rel="stylesheet" href="{!! url('public/assets/css/boxicons.min.css'.$version) !!}">
    <link rel="stylesheet" href="{!! url('public/assets/css/style.css'.$version) !!}">

    <script src="{!! url('public/assets/js/jquery-3.7.1.min.js'.$version) !!}"></script>
  </head>
  <body style="background: #ecf0f1;">
    
    <!-- wrapper :: START -->
    <div class="wrapper position-fixed start-0 end-0 top-0 bottom-0" style="overflow-x: hidden;overflow-y: auto;">
    
        @include('components.header')
        @if($page == 'galeri')
          @include('components.galeri')
        @else
          @include('components.layanan')
          @include('components.tentang')
          @include('components.filosopi')
        @endif
        @include('components.kontak')
        @include('components.sidebar')

    </div>
    <!-- wrapper :: END -->

    <!-- splash screen :: START -->
    <div class="splash position-fixed start-0 end-0 top-0 bottom-0" style="z-index: 99999;">
      <div class="position-absolute start-0 end-0 top-0 bottom-0 bg-primary d-flex align-items-center justify-content-center">
        <div class="position-relative" align="center">
          <img src="{!! url(env('ICON')) !!}" alt="Logo" class="rounded-circle bx-flashing" style="width: 120px;">
        </div>
      </div>
    </div>
    <!-- splash screen :: END -->

    @if($page == 'galeri')

      <div class="modal fade" id="modal-unggah-galeri">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <div class="position-relative w-100" align="right">
                <a role="button" class="text-danger text-decoration-none fs-3" data-bs-dismiss="modal">
                  <i class="bi bi-x-circle"></i>
                </a>
              </div>
            </div>
            <div class="modal-body">
              <div class="w-100 bx-flashing" align="center">
                Memproses ...
              </div>
            </div>
          </div>
        </div>
      </div>

    @endif

    <script src="{!! url('vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js'.$version) !!}"></script>
    <script src="{!! url('public/assets/js/sweetalert2.js'.$version) !!}"></script>
    <script src="{!! url('public/assets/js/script.js'.$version) !!}"></script>
    <script>
      let URL = '{!! url('./') !!}';
      let session = '';
      @if(Session::has('id_user') == true)
        session = '{{ Session::get('id_user') }}';
      @endif
    </script>
  </body>
</html>