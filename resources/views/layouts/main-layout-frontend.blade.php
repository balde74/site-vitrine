<!DOCTYPE html>

<html >
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href= {{asset('frontend/plugins/bootstrap/bootstrap.min.css')}}>
  <!-- Icon Font Css -->
  <link rel="stylesheet" href= {{asset('frontend/plugins/themify/css/themify-icons.css')}}>
  <link rel="stylesheet" href= {{asset('frontend/plugins/fontawesome/css/all.min.css')}}>
  <link rel="stylesheet" href= {{asset('frontend/plugins/magnific-popup/magnific-popup.css')}}>
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href= {{asset('frontend/plugins/slick/slick.css')}}>
  <link rel="stylesheet" href= {{asset('frontend/plugins/slick/slick-theme.css')}}>

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href= {{asset('frontend/css/style.css')}}>
  
  <!--Favicon-->
  <link rel="icon" href= {{asset('frontend/images/favicon.png" type="image/x-icon')}}>

</head>

<body>
    @include('includes/frontend/_navigation')
    @yield('content')

    @include('includes/frontend/_footer')

<!-- Header Start -->


<!--Scroll to top-->
<div id="scroll-to-top" class="scroll-to-top">
  <span class="icon fa fa-angle-up"></span>
</div>


<!-- 
Essential Scripts
=====================================-->
<!-- Main jQuery -->
<script src= {{asset('frontend/plugins/jquery/jquery.min.js')}}></script>
<!-- Bootstrap 4.3.1 -->
<script src= {{asset('frontend/plugins/bootstrap/bootstrap.min.js')}}></script>
<!--  Magnific Popup-->
<script src= {{asset('frontend/plugins/magnific-popup/jquery.magnific-popup.min.js')}}></script>
<!-- Slick Slider -->
<script src= {{asset('frontend/plugins/slick/slick.min.js')}}></script>
<!-- Counterup -->
<script src= {{asset('frontend/plugins/counterup/jquery.waypoints.min.js')}}></script>
<script src= {{asset('frontend/plugins/counterup/jquery.counterup.min.js')}}></script>

<!-- Google Map -->
{{-- <script src= "https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer ></script> --}}
{{-- <script src= {{asset('frontend/plugins/google-map/map.js" defer')}}></script> --}}

<script src= {{asset('frontend/js/script.js')}}></script>

</body>

</html>
