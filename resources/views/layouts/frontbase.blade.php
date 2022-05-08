<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>@yield('title') </title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name ="author" content="Hüseyin Özel">
    <link rel="icon" href="@yield("icon")" type="image/x-icon">

    <!--- basic page needs
    ================================================== -->


    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/base.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/vendor.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/main.css">


    <!-- script
    ================================================== -->
    <script src="{{asset('assets')}}/js/modernizr.js"></script>
    <script src="{{asset('assets')}}/js/pace.min.js"></script>


    @yield("head")
</head>

<body id = "top">

@section('header')
@show



@section('slider')


@show


@yield('content')

@include("home.footer")
@yield('foot')
</body >
</html>
