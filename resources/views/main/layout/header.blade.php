<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- title of site -->
    <title>Directory Landing Page</title>

    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="{{ asset('public/assets/logo/favicon.png')}}"/>

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="{{ asset('public/assets/css/font-awesome.min.css')}}">

    <!--linear icon css-->
    <link rel="stylesheet" href="{{ asset('public/assets/css/linearicons.css')}}">

    <!--animate.css-->
    <link rel="stylesheet" href="{{ asset('public/assets/css/animate.css')}}">

    <!--flaticon.css-->
    <link rel="stylesheet" href="{{ asset('public/assets/css/flaticon.css')}}">

    <!--slick.css-->
    <link rel="stylesheet" href="{{ asset('public/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/slick-theme.css')}}">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css')}}">

    <!-- bootsnav -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootsnav.css')}}" >

    <!--style.css-->
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css')}}">

    <!--responsive.css-->
    <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @stack('css')

</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!--header-top start -->
<header id="header-top" class="header-top">
    <ul>
        <li>
            <div class="header-top-left">
                <ul>
                    <li class="select-opt">
                        <select name="language" id="language">
                            <option value="default">Europe</option>
                            <option value="Bangla">Asia</option>
                            <option value="Arabic">Americas</option>
                        </select>
                    </li>
                    <li class="select-opt">
                        <select name="currency" id="currency">
                            <option value="usd">Online</option>
                            <option value="euro">Offline</option>
                            <option value="bdt">Unavailable</option>
                        </select>
                    </li>
                </ul>
            </div>
        </li>
        <li class="head-responsive-right pull-right">
            <div class="header-top-right">
                <ul>
                    <li class="header-top-contact">
                        Matefinder
                    </li>
                    @if( \Illuminate\Support\Facades\Auth::check() )
                        <li class="header-top-contact">
                            <a href="{{ route('logout') }}" style="font-weight: bold">Logout</a>
                        </li>
                    @else
                        <li class="header-top-contact">
                            <a href="{{ route('loginform') }}">sign in</a>
                        </li>
                        <li class="header-top-contact">
                            <a href="{{ route('registerform') }}">register</a>
                        </li>
                    @endif
                </ul>
            </div>
        </li>
    </ul>

</header><!--/.header-top-->
<!--header-top end -->
