<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>CRM-Qsoft</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">
  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.theme.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css')}}">
  <!-- meanmenu CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/css/meanmenu/meanmenu.min.css')}}">
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
  <!-- jvectormap CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/css/jvectormap/jquery-jvectormap-2.0.3.css')}}">
  <!-- notika icon CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/css/notika-custom-icon.css')}}">
  <!-- wave CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/css/wave/waves.min.css')}}">
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/style.css')}}">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
  <!-- modernizr JS
		============================================ -->
  <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  @include('layouts.header')

  @yield('content')

  @include('layouts.footer')
  <!-- jquery
		============================================ -->
  <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
  <!-- bootstrap JS
		============================================ -->
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <!-- wow JS
		============================================ -->
  <script src="{{asset('assets/js/wow.min.js')}}"></script>
  <!-- price-slider JS
		============================================ -->
  <script src="{{asset('assets/js/jquery-price-slider.js')}}"></script>
  <!-- owl.carousel JS
		============================================ -->
  <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
  <!-- scrollUp JS
		============================================ -->
  <script src="{{asset('assets/js/jquery.scrollUp.min.js')}}"></script>
  <!-- meanmenu JS
		============================================ -->
  <script src="{{asset('assets/js/meanmenu/jquery.meanmenu.js')}}"></script>
  <!-- counterup JS
		============================================ -->
  <script src="{{asset('assets/js/counterup/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('assets/js/counterup/waypoints.min.js')}}"></script>
  <script src="{{asset('assets/js/counterup/counterup-active.js')}}"></script>
  <!-- mCustomScrollbar JS
		============================================ -->
  <script src="{{asset('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
  <!-- jvectormap JS
		============================================ -->
  <script src="{{asset('assets/js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
  <script src="{{asset('assets/js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <script src="{{asset('assets/js/jvectormap/jvectormap-active.js')}}"></script>
  <!-- sparkline JS
		============================================ -->
  <script src="{{asset('assets/js/sparkline/jquery.sparkline.min.js')}}"></script>
  <script src="{{asset('assets/js/sparkline/sparkline-active.js')}}"></script>
  <!-- sparkline JS
		============================================ -->
  <script src="{{asset('assets/js/flot/jquery.flot.js')}}"></script>
  <script src="{{asset('assets/js/flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('assets/js/flot/curvedLines.js')}}"></script>
  <script src="{{asset('assets/js/flot/flot-active.js')}}"></script>
  <!-- knob JS
		============================================ -->
  <script src="{{asset('assets/js/knob/jquery.knob.js')}}"></script>
  <script src="{{asset('assets/js/knob/jquery.appear.js')}}"></script>
  <script src="{{asset('assets/js/knob/knob-active.js')}}"></script>
  <!--  wave JS
		============================================ -->
  <script src="{{asset('assets/js/wave/waves.min.js')}}"></script>
  <script src="{{asset('assets/js/wave/wave-active.js')}}"></script>
  <!--  todo JS
		============================================ -->
  <script src="{{asset('assets/js/todo/jquery.todo.js')}}"></script>
  <!-- plugins JS
		============================================ -->
  <script src="{{asset('assets/js/plugins.js')}}"></script>
  <!--  Chat JS
		============================================ -->
  <script src="{{asset('assets/js/chat/moment.min.js')}}"></script>
  <script src="{{asset('assets/js/chat/jquery.chat.js')}}"></script>
  <!-- main JS
		============================================ -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <!-- tawk chat JS
		============================================ -->
  <script src="{{asset('assets/js/tawk-chat.js')}}"></script>
</body>

</html>