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

<style>
    .notification {

  color: white;
  text-decoration: none;
  padding: 10px 10px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}




.notification .badge {
  position:absolute;
  top: 28px;
  right: -11px;
  padding: 5px 8px;
  border-radius: 50%;
  background: red;
  color: white;
}
    .icons8-delete {
        display: inline-block;
        width: 100px;
        height: 100px;
        background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIKdmlld0JveD0iMCAwIDEwMCAxMDAiCnN0eWxlPSIgZmlsbDojdW5kZWZpbmVkOyI+PHBhdGggZD0iTSA0NiAxMyBDIDQ0LjM1NTAzIDEzIDQzIDE0LjM1NTAzIDQzIDE2IEwgNDMgMTggTCAzMi4yNjU2MjUgMTggQyAzMC41MTA5MjIgMTggMjguODc5NTE3IDE4LjkyMjgxMSAyNy45NzY1NjIgMjAuNDI3NzM0IEwgMjYuNDMzNTk0IDIzIEwgMjMgMjMgQyAyMC44MDI2NjYgMjMgMTkgMjQuODAyNjY2IDE5IDI3IEMgMTkgMjkuMTk3MzM0IDIwLjgwMjY2NiAzMSAyMyAzMSBMIDI0LjA3NDIxOSAzMSBMIDI3LjY0ODQzOCA3Ny40NTg5ODQgQyAyNy44ODc3MyA4MC41NzU3NzUgMzAuNTA0NTI5IDgzIDMzLjYzMDg1OSA4MyBMIDY2LjM2OTE0MSA4MyBDIDY5LjQ5NTQ3MSA4MyA3Mi4xMTIyNyA4MC41NzU3NzUgNzIuMzUxNTYyIDc3LjQ1ODk4NCBMIDc1LjkyNTc4MSAzMSBMIDc3IDMxIEMgNzkuMTk3MzM0IDMxIDgxIDI5LjE5NzMzNCA4MSAyNyBDIDgxIDI0LjgwMjY2NiA3OS4xOTczMzQgMjMgNzcgMjMgTCA3My41NjY0MDYgMjMgTCA3Mi4wMjM0MzggMjAuNDI3NzM0IEMgNzEuMTIwNDgxIDE4LjkyMjgxMSA2OS40ODkwNzggMTggNjcuNzM0Mzc1IDE4IEwgNTcgMTggTCA1NyAxNiBDIDU3IDE0LjM1NTAzIDU1LjY0NDk3IDEzIDU0IDEzIEwgNDYgMTMgeiBNIDQ2IDE1IEwgNTQgMTUgQyA1NC41NjUwMyAxNSA1NSAxNS40MzQ5NyA1NSAxNiBMIDU1IDE4IEwgNDUgMTggTCA0NSAxNiBDIDQ1IDE1LjQzNDk3IDQ1LjQzNDk3IDE1IDQ2IDE1IHogTSAzMi4yNjU2MjUgMjAgTCA0My44MzIwMzEgMjAgQSAxLjAwMDEgMS4wMDAxIDAgMCAwIDQ0LjE1ODIwMyAyMCBMIDU1LjgzMjAzMSAyMCBBIDEuMDAwMSAxLjAwMDEgMCAwIDAgNTYuMTU4MjAzIDIwIEwgNjcuNzM0Mzc1IDIwIEMgNjguNzg5NjcyIDIwIDY5Ljc2MzU5NSAyMC41NTE5NTUgNzAuMzA2NjQxIDIxLjQ1NzAzMSBMIDcxLjgzMzk4NCAyNCBMIDY4LjUgMjQgQSAwLjUwMDA1IDAuNTAwMDUgMCAxIDAgNjguNSAyNSBMIDczLjUgMjUgTCA3NyAyNSBDIDc4LjExNjY2NiAyNSA3OSAyNS44ODMzMzQgNzkgMjcgQyA3OSAyOC4xMTY2NjYgNzguMTE2NjY2IDI5IDc3IDI5IEwgMjMgMjkgQyAyMS44ODMzMzQgMjkgMjEgMjguMTE2NjY2IDIxIDI3IEMgMjEgMjUuODgzMzM0IDIxLjg4MzMzNCAyNSAyMyAyNSBMIDI3IDI1IEwgNjEuNSAyNSBBIDAuNTAwMDUgMC41MDAwNSAwIDEgMCA2MS41IDI0IEwgMjguMTY2MDE2IDI0IEwgMjkuNjkzMzU5IDIxLjQ1NzAzMSBDIDMwLjIzNjQwNSAyMC41NTE5NTUgMzEuMjEwMzI4IDIwIDMyLjI2NTYyNSAyMCB6IE0gNjQuNSAyNCBBIDAuNTAwMDUgMC41MDAwNSAwIDEgMCA2NC41IDI1IEwgNjYuNSAyNSBBIDAuNTAwMDUgMC41MDAwNSAwIDEgMCA2Ni41IDI0IEwgNjQuNSAyNCB6IE0gMjYuMDc4MTI1IDMxIEwgNzMuOTIxODc1IDMxIEwgNzAuMzU3NDIyIDc3LjMwNjY0MSBDIDcwLjE5NjcxNSA3OS4zOTk4NSA2OC40Njg4MSA4MSA2Ni4zNjkxNDEgODEgTCAzMy42MzA4NTkgODEgQyAzMS41MzExOSA4MSAyOS44MDMyODUgNzkuMzk5ODUgMjkuNjQyNTc4IDc3LjMwNjY0MSBMIDI2LjA3ODEyNSAzMSB6IE0gMzggMzUgQyAzNi4zNDg5MDYgMzUgMzUgMzYuMzQ4OTA2IDM1IDM4IEwgMzUgNzMgQyAzNSA3NC42NTEwOTQgMzYuMzQ4OTA2IDc2IDM4IDc2IEMgMzkuNjUxMDk0IDc2IDQxIDc0LjY1MTA5NCA0MSA3MyBMIDQxIDM4IEMgNDEgMzYuMzQ4OTA2IDM5LjY1MTA5NCAzNSAzOCAzNSB6IE0gNTAgMzUgQyA0OC4zNDg5MDYgMzUgNDcgMzYuMzQ4OTA2IDQ3IDM4IEwgNDcgNzMgQyA0NyA3NC42NTEwOTQgNDguMzQ4OTA2IDc2IDUwIDc2IEMgNTEuNjUxMDk0IDc2IDUzIDc0LjY1MTA5NCA1MyA3MyBMIDUzIDY5LjUgQSAwLjUwMDA1IDAuNTAwMDUgMCAxIDAgNTIgNjkuNSBMIDUyIDczIEMgNTIgNzQuMTEwOTA2IDUxLjExMDkwNiA3NSA1MCA3NSBDIDQ4Ljg4OTA5NCA3NSA0OCA3NC4xMTA5MDYgNDggNzMgTCA0OCAzOCBDIDQ4IDM2Ljg4OTA5NCA0OC44ODkwOTQgMzYgNTAgMzYgQyA1MS4xMTA5MDYgMzYgNTIgMzYuODg5MDk0IDUyIDM4IEwgNTIgNjMuNSBBIDAuNTAwMDUgMC41MDAwNSAwIDEgMCA1MyA2My41IEwgNTMgMzggQyA1MyAzNi4zNDg5MDYgNTEuNjUxMDk0IDM1IDUwIDM1IHogTSA2MiAzNSBDIDYwLjM0ODkwNiAzNSA1OSAzNi4zNDg5MDYgNTkgMzggTCA1OSAzOS41IEEgMC41MDAwNSAwLjUwMDA1IDAgMSAwIDYwIDM5LjUgTCA2MCAzOCBDIDYwIDM2Ljg4OTA5NCA2MC44ODkwOTQgMzYgNjIgMzYgQyA2My4xMTA5MDYgMzYgNjQgMzYuODg5MDk0IDY0IDM4IEwgNjQgNzMgQyA2NCA3NC4xMTA5MDYgNjMuMTEwOTA2IDc1IDYyIDc1IEMgNjAuODg5MDk0IDc1IDYwIDc0LjExMDkwNiA2MCA3MyBMIDYwIDQ3LjUgQSAwLjUwMDA1IDAuNTAwMDUgMCAxIDAgNTkgNDcuNSBMIDU5IDczIEMgNTkgNzQuNjUxMDk0IDYwLjM0ODkwNiA3NiA2MiA3NiBDIDYzLjY1MTA5NCA3NiA2NSA3NC42NTEwOTQgNjUgNzMgTCA2NSAzOCBDIDY1IDM2LjM0ODkwNiA2My42NTEwOTQgMzUgNjIgMzUgeiBNIDM4IDM2IEMgMzkuMTEwOTA2IDM2IDQwIDM2Ljg4OTA5NCA0MCAzOCBMIDQwIDczIEMgNDAgNzQuMTEwOTA2IDM5LjExMDkwNiA3NSAzOCA3NSBDIDM2Ljg4OTA5NCA3NSAzNiA3NC4xMTA5MDYgMzYgNzMgTCAzNiAzOCBDIDM2IDM2Ljg4OTA5NCAzNi44ODkwOTQgMzYgMzggMzYgeiBNIDU5LjQ5MjE4OCA0MS45OTIxODggQSAwLjUwMDA1IDAuNTAwMDUgMCAwIDAgNTkgNDIuNSBMIDU5IDQ0LjUgQSAwLjUwMDA1IDAuNTAwMDUgMCAxIDAgNjAgNDQuNSBMIDYwIDQyLjUgQSAwLjUwMDA1IDAuNTAwMDUgMCAwIDAgNTkuNDkyMTg4IDQxLjk5MjE4OCB6Ij48L3BhdGg+PC9zdmc+') 50% 50% no-repeat;
        background-size: 100%; }

    .icons8-delete:hover {
        text-shadow: 5px -5px 10px magenta;
        font-size: x-large;
        font-family: Jokerman;
        color:blue;
        background-color: Beige;
        padding: 10px;
        margin: 25px;
        text-align: center;
    }

    2
    3
    4
    5
    6
    7
    8
    9
    10
    11
    12
    13
    14
    15
    16
    17
    18
    19
    20
    21
    22
    23
    24
    25
    26
    27
    28
    29
    30
    31
    32
    33
    34
    35
    36
    37
    38
    39
    40
    41

    .btn2 {
        -moz-box-shadow: 0px 0px 0px 2px #9fb4f2;
        -webkit-box-shadow: 0px 0px 0px 2px #9fb4f2;
        box-shadow: 0px 0px 0px 2px #9fb4f2;
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #7892c2), color-stop(1, #476e9e));
        background:-moz-linear-gradient(top, #7892c2 5%, #476e9e 100%);
        background:-webkit-linear-gradient(top, #7892c2 5%, #476e9e 100%);
        background:-o-linear-gradient(top, #7892c2 5%, #476e9e 100%);
        background:-ms-linear-gradient(top, #7892c2 5%, #476e9e 100%);
        background:linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#7892c2', endColorstr='#476e9e',GradientType=0);
        background-color:#7892c2;
        -moz-border-radius:10px;
        -webkit-border-radius:10px;
        border-radius:10px;
        border:1px solid #4e6096;
        display:inline-block;
        cursor:pointer;
        color:#ffffff;
        font-family:Arial;
        font-size:19px;
        padding:12px 37px;
        text-decoration:none;
        text-shadow:0px 1px 0px #283966;
    }
    .btn2:hover {
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #476e9e), color-stop(1, #7892c2));
        background:-moz-linear-gradient(top, #476e9e 5%, #7892c2 100%);
        background:-webkit-linear-gradient(top, #476e9e 5%, #7892c2 100%);
        background:-o-linear-gradient(top, #476e9e 5%, #7892c2 100%);
        background:-ms-linear-gradient(top, #476e9e 5%, #7892c2 100%);
        background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#476e9e', endColorstr='#7892c2',GradientType=0);
        background-color:#476e9e;
    }
    .bnt2:active {
        position:relative;
        top:1px;
    }

</style>

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
