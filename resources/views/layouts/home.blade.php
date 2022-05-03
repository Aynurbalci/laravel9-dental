<!DOCTYPE html>
<html lang="en">


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
    <link href="{{ asset('assests')}}/img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assests')}}/lib/slick/slick.css" rel="stylesheet">
    <link href="{{ asset('assests')}}/lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assests')}}/css/style.css" rel="stylesheet">

        <!-- =============== Bootstrap Core CSS =============== -->
        <link rel="stylesheet" href="{{ asset('assests')}}/css1/bootstrap.min.css" type="text/css">
        <!-- =============== fonts awesome =============== -->
        <link rel="stylesheet" href="{{ asset('assests')}}/font1/css/font-awesome.min.css" type="text/css">
        <!-- =============== Plugin CSS =============== -->
        <link rel="stylesheet" href="{{ asset('assests')}}/css1/animate.min.css" type="text/css">
        <!-- =============== Custom CSS =============== -->
        <link rel="stylesheet" href="{{ asset('assests')}}/css1/style.css" type="text/css">
        <!-- =============== Owl Carousel Assets =============== -->
        <link href="{{ asset('assests')}}/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="{{ asset('assests')}}/owl-carousel/owl.theme.css" rel="stylesheet">

         <link rel="stylesheet" href="{{ asset('assests')}}/css1/isotope-docs.css" media="screen">
          <link rel="stylesheet" href="{{ asset('assests')}}/css1/baguetteBox.css">



    @yield('css')
    @yield('headerjs')

</head>

<body>
    @include('home._search')
    @include('home._header')


@section('slider')
@show
    @section('content')
    içerik alanı
    @show
    @include('home._contact')
    @include('home._footer')
    @yield('footerjs')

















</body>
