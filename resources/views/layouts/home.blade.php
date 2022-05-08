<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesflat.com/html/carenow/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 May 2022 00:09:52 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assests') }}/dent/assets/css/color/color-1.css">
    <link rel="stylesheet" href="{{ asset('assests') }}/dent/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('assests') }}/dent/revolution/css/layers.css">
    <link rel="stylesheet" href="{{ asset('assests') }}/dent/revolution/css/settings.css">
    <link rel="stylesheet" href="{{ asset('assests') }}/dent/assets/css/responsive.css">

    <link rel="stylesheet" href="{{ asset('assests') }}/dent/owlcarousel/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{ asset('assests') }}/dent/assets/animation/animate.css">

    <link rel="icon" href="{{ asset('assests') }}/dent/assets/image/Facvicon.webp" sizes="32x32" />
    <link rel="stylesheet" href="{{ asset('assests') }}/dent/assets/css/color/color-1.css">
    <link rel="stylesheet" href="{{ asset('assests') }}/dent/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('assests') }}/dent/revolution/css/layers.css">
    <link rel="stylesheet" href="{{ asset('assests') }}/dent/revolution/css/settings.css">
    <link rel="stylesheet" href="{{ asset('assests') }}/dent/assets/css/responsive.css">

    <link rel="stylesheet" href="{{ asset('assests') }}/dent/owlcarousel/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{ asset('assests') }}/dent/assets/animation/animate.css">

    <link rel="icon" href="{{ asset('assests') }}/dent/assets/image/Facvicon.webp" sizes="32x32" />



    @yield('head')
</head>

<body class="counter-scroll header_sticky">
    <div class="wrapper">
        <div id="page">
            @include('home._header')

            <div id="main-content" class="site-main clearfix">

                <div id="content-wrap">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                            <div class="page-content">

                                @section('slider')
                                @show
                                @yield('content')

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            @include('home._footer')
            @yield('foot')

        </div>

    </div>
</body>

</html>
