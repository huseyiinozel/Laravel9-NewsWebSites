<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <title>@yield('title') </title>
    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Abstract</title>
    <meta name="description" content="">
    <meta name="author" content="">

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

    <!-- favicons
     ================================================== -->
    <link rel="shortcut icon" href="{{asset('assets')}}/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{asset('assets')}}/favicon.ico" type="image/x-icon">
    @yield("head")
</head>

<body id = "top">

@include("home.header")

@section('sidebar')
    @include("home.sidebar")
@show
@section('slider')
@show

@yield('content')
@include("home.footer")
@yield('foot')
</body >
</html>
