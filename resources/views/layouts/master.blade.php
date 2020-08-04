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

    <title>Cari-Properti</title>
  </head>
{{-- Navbar --}}
@include('layouts.navbar')

{{-- Content --}}
@yield('content')

{{-- Footer --}}
@include('layouts.footer')