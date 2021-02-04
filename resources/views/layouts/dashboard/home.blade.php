<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->

    <title> Admin Control</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>my portfolio</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_files/css/main.css')}}">
    <!-- Font-icon css-->

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('dashboard_files/js/jquery-3.3.1.min.js')}}"></script>

    @stack('styles')
</head>
<body class="app sidebar-mini">
<!-- Navbar-->
@include('layouts.dashboard._header')
<!-- Sidebar menu-->
@include('layouts.dashboard._aside')
<main class="app-content">


    @yield('content')

</main>
<!-- Essential javascripts for application to work-->

<script src="{{asset('dashboard_files/js/popper.min.js')}}"></script>
<script src="{{asset('dashboard_files/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dashboard_files/js/main.js')}}"></script>







</body>
</html>
