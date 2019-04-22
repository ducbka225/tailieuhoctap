<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>
	<base href="{{asset('')}}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="ezuca/css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="ezuca/css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="ezuca/css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="ezuca/css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="ezuca/css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="ezuca/style.css">
</head>
<body>
    @include('header')

    @yield('content')

 	@include('footer')

<script type='text/javascript' src='ezuca/js/jquery.js'></script>
<script type='text/javascript' src='ezuca/js/swiper.min.js'></script>
<script type='text/javascript' src='ezuca/js/masonry.pkgd.min.js'></script>
<script type='text/javascript' src='ezuca/js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='ezuca/js/custom.js'></script>

</body>
</html>