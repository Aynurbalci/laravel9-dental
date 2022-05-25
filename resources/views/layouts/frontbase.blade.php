<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield("title")</title>
    <meta content="Description" name="@yield("description")">
    <meta content="Keywords" name="@yield("keywords")">
    <meta content="author" name="Aynur BALCI">
<!-- Favicon -->
<link href="@yield("keywords")" rel="icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

<!-- CSS Libraries -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="{{asset('assests')  }}/lib/slick/slick.css" rel="stylesheet">
<link href="{{asset('assests')  }}/lib/slick/slick-theme.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{asset('assests')  }}/css/style.css" rel="stylesheet">
</head>

<body>



    <!-- NAVIGATION -->

    @yield('content')




</body>
</html>
