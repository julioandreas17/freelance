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

    @include('components.navbar')
    @include('components.header')
    @include('components.about')
    @include('components.services')
    
    <script>
      var URL = '{!! url('./') !!}';
    </script>
    <script src="{!! url('vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js'.$version) !!}"></script>
    <script src="{!! url('node_modules/aos/dist/aos.js'.$version) !!}"></script>
    <script src="{!! url('public/js/script.js'.$version) !!}"></script>
  </body>
</html>