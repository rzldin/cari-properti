<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      {{-- Icon --}}
      <link rel="icon" href="{{ asset('./assets/favicon/favicon.ico')}}" type='image/x-icon'/>
      {{-- MyCSS --}}
      <link rel="stylesheet" href="{{ asset('./assets/css/style.css')}}">
      {{-- Page User --}}
      <link rel="stylesheet" href="{{ asset('./assets/css/custom.css')}}">
      {{-- Bootstrap --}}
      <link href="{{ asset('./assets') }}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      {{-- Font Awesome --}}
      <link rel="stylesheet" href="{{ asset('./assets') }}/font-awesome/css/font-awesome.min.css">
      {{-- Scroll To Top --}}
      <style type="text/css">
        a.scrolltotop {
            background: #D50000 none repeat scroll 0 0;
            border-radius: 5px;
            bottom: 20px;
            color: #ffffff;
            display: none;
            font-size: 20px;
            height: 40px;
            padding-top: 5px;
            position: fixed;
            right: 20px;
            text-align: center;
            width: 40px;
            z-index: 99;
        }      
      </style>

    <title>Cari-Properti</title>
  </head>
  <div id="home"></div>
{{-- Navbar --}}
@include('layouts.navbar')

{{-- Content --}}
@yield('content')

{{-- Footer --}}
@include('layouts.footer')