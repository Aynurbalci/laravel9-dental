<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E Store - eCommerce HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="eCommerce HTML Template Free Download" name="keywords">
    <meta content="eCommerce HTML Template Free Download" name="description">

    <!-- HTML META ETİKETLERİ -->
    <title> @yield('title') </title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Aynur BALCI">


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assests')}}/lib/slick/slick.css" rel="stylesheet">
    <link href="{{ asset('assests')}}/lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assests')}}/css/style.css" rel="stylesheet">
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assests')}}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('assests')}}/lib/slick/slick.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assests')}}/js/main.js"></script>


    <!-- 2 -->
    <!-- =============== Bootstrap Core CSS =============== -->
    <link rel="stylesheet" href="{{ asset('assests')}}/css/bootstrap.min.css" type="text/css">
    <!-- =============== fonts awesome =============== -->
    <link rel="stylesheet" href="{{ asset('assests')}}/font/css/font-awesome.min.css" type="text/css">
    <!-- =============== Plugin CSS =============== -->
    <link rel="stylesheet" href="{{ asset('assests')}}/css/animate.min.css" type="text/css">
    <!-- =============== Custom CSS =============== -->
    <link rel="stylesheet" href="{{ asset('assests')}}/css/style1.css" type="text/css">
    <!-- =============== Owl Carousel Assets =============== -->
    <link href="{{ asset('assests')}}/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('assests')}}/owl-carousel/owl.theme.css" rel="stylesheet">

    <link rel="stylesheet" href="assets{{ asset('assests')}}/css/isotope-docs.css" media="screen">
    <link rel="stylesheet" href="assets{{ asset('assests')}}/css/baguetteBox.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- =============== jQuery =============== -->
    <script src="{{ asset('assests')}}/js/jquery.js"></script>
    <script src="{{ asset('assests')}}/js/isotope-docs.min.js"></script>
    <!-- =============== Bootstrap Core JavaScript =============== -->
    <script src="{{ asset('assests')}}/js/bootstrap.min.js"></script>
    <!-- =============== Plugin JavaScript =============== -->
    <script src="{{ asset('assests')}}/js/jquery.easing.min.js"></script>
    <script src="{{ asset('assests')}}/js/jquery.fittext.js"></script>
    <script src="{{ asset('assests')}}/js/wow.min.js"></script>
    <!-- =============== owl carousel =============== -->
    <script src="{{ asset('assests')}}/owl-carousel/owl.carousel.js"></script>
    <!-- Isotope does NOT require jQuery. But it does make things easier -->

    <script src="{{ asset('assests')}}/js/baguetteBox.js" async></script>
    <script src="{{ asset('assests')}}/js/plugins.js" async></script>

    <!-- =============== Custom Theme JavaScript =============== -->
    <script src="{{ asset('assests')}}/js/creative.js"> </script>
    <script src="{{ asset('assests')}}/js/jquery.nicescroll.min.js"></script>



    @yield('css')
    @yield('headerjs')

</head>

<body>

    @include('home._header')
    @include('home._menu')
    <!-- NAVIGATION -->
    <div class="  container-fluid">
        <div class="row">
            @include('home._category')
        </div>
    </div>
@section('slider')
@show
    @section('content')
    içerik alanı
    @show
    @include('home._contact')
    @include('home._footer')
    @yield('footerjs')

















</body>
