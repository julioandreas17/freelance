@php 
    $version = '?v='.date('YmdHis');
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

    <title>Selaras Hypnotherapy</title>
    <link rel="shortcut icon" href="{!! url(env('ICON')) !!}" type="image/x-icon">

    <link rel="stylesheet" href="{!! url('vendor/twbs/bootstrap/dist/css/bootstrap.min.css'.$version) !!}">
    <link rel="stylesheet" href="{!! url('vendor/twbs/bootstrap-icons/font/bootstrap-icons.min.css'.$version) !!}">
    <link rel="stylesheet" href="{!! url('public/assets/css/boxicons.min.css'.$version) !!}">
    <link rel="stylesheet" href="{!! url('public/assets/css/style.css'.$version) !!}">

    <script src="{!! url('public/assets/js/jquery-3.7.1.min.js'.$version) !!}"></script>
  </head>
  <body style="background: #ecf0f1;">
    
    <!-- wrapper :: START -->
    <div class="position-fixed start-0 end-0 top-0 bottom-0" style="overflow-x: hidden;overflow-y: auto;">
    
        @include('components.header')
        @include('components.layanan')
        @include('components.tentang')
        @include('components.filosopi')

    </div>
    <!-- wrapper :: END -->

    <script src="{!! url('vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js'.$version) !!}"></script>
    <script src="{!! url('public/assets/js/sweetalert2.js'.$version) !!}"></script>
    <script src="{!! url('public/assets/js/script.js'.$version) !!}"></script>
  </body>
</html>