<!doctype html>
<html class="no-js" lang="en">

	<head>

		<meta charset="utf-8">
		<title>{{ $title }}</title>
    	<meta name="description" content="{{ $description }}">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="HandheldFriendly" content="true" />
		<meta name="apple-touch-fullscreen" content="yes" />

		<link rel="shortcut icon" href="favicon.png">

		<!-- All Animations CSS -->
		<link href="css/animate.css" rel="stylesheet" type="text/css">
		<!-- Image Lightbox CSS-->
		<link rel="stylesheet" href="css/imagelightbox.css" type="text/css" media="screen">
		<!-- Theme styles and Menu styles -->
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/mainmenu.css" rel="stylesheet" type="text/css">
		<!-- Call Fontawsome Icon Font from a CDN -->
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

		<!--FlexSlider -->
		<link rel="stylesheet" href="js/woothemes-FlexSlider-06b12f8/flexslider.css" type="text/css" media="screen">
		<!--Isotope Plugin -->
		<link rel="stylesheet" href="js/isotope/css/style.css" type="text/css" media="screen">
		<!--Simple Text Rotator -->
		<link href="css/simpletextrotator.css" rel="stylesheet" type="text/css">
		<!--Style Switcher, You propably want to remove this!-->
		<link href="css/_style_switcher.css" rel="stylesheet" type="text/css">
		<!--Modernizer Custom -->
		<script type="text/javascript" src="js/modernizr.custom.48287.js"></script>
		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="apple-touch-fa-57x57-precomposed.png">

		<!-- Custom CSS for Knutsford Podiatry -->
		<link href="css/custom.css" rel="stylesheet" type="text/css">

		@yield('stylesheets')

	</head>

	<body class="sticky_header">

		<div class="overflow_wrapper">

		@yield('main-content')

		 <script src="js/jquery-1.10.2.min.js"></script>
	     <script src="twitter-bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	     
	     <!--FlexSlider -->
	     <script src="js/woothemes-FlexSlider-06b12f8/jquery.flexslider-min.js"></script>
	     <!--Isotope Plugin -->
	     <script src="js/isotope/jquery.isotope.min.js" type="text/javascript"></script>
	     <!--To-Top Button Plugin -->
	     <script type="text/javascript" src="js/jquery.ui.totop.js"></script>
	     <!--Easing animations Plugin -->
	     <script type="text/javascript" src="js/easing.js"></script>
	     <!--WOW Reveal on scroll Plugin -->
	     <script type="text/javascript" src="js/wow.min.js"></script>
	     <!--Simple Text Rotator -->
	     <script type="text/javascript" src="js/jquery.simple-text-rotator.js"></script>
	     <!--The Theme Required Js -->
	     <script type="text/javascript" src="js/cleanstart_theme.js"></script>
	     <!--To collapse the menu -->
	     <script type="text/javascript" src="js/collapser.js"></script>
	     <!--Twitter Feed API -->
	     <script type="text/javascript" src="js/tweetie/tweetie.min.js"></script>

	     @yield('scripts')

	</body>

</html>