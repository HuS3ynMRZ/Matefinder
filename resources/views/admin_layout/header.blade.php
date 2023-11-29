<!DOCTYPE html>
<html style="background-color: #EFF2F7 !important;">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('logos/FEVICON/FEVICON.png') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('public/panel_assets/css/bootstrap-dark.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('public/panel_assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('public/panel_assets/css/app-dark.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset( 'public/css/datatables/datatables.min.css' ) }}">
    <link rel="stylesheet" href="{{ asset( 'public/css/datatables/buttons.datatables.min.css' ) }}">
    <style>
        /*.bg-dark{*/
        /*    color: #EC1D25 !important;*/
        /*}*/

        /*.dropdown-item:focus, .dropdown-item:hover {*/
        /*    color: #EC1D25 !important;*/
        /*    text-decoration: none !important;*/
        /*    background-color: #EEF1F6;*/
        /*}*/

        /*.navbar-header .dropdown .show.header-item {*/
        /*    background-color: #EEF1F6 !important;*/
        /*    color: #EC1D25 !important;*/
        /*}*/

        .form-group {
            margin-bottom: 10px;
        }

        .text-right {
            text-align: right;
        }

        .form-control {
            color: black !important;
        }

        .invalid_input {
            border-color: red;
        }

        table tr th, table tr td {
            color: black;
        }
        .img-flag {
            margin-right: 7px;
            height: 40px !important;
            width: 40px !important;
            border-radius: 50px;
        }
    </style>
    @stack('css')
</head>

<body data-sidebar="dark" >
<!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar">
{{--    <header id="page-topbar" style="background-color: #EC1D25 !important">--}}
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
{{--                <div class="navbar-brand-box" style="background-color: #EC1D25 !important">--}}

                    <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img class="img-fluid" src="{{ asset('logos/HD-lOGO/WHITE-HD.png') }}" alt="" height="22">
                    </span>
                        <span class="logo-lg">
                        <img class="img-fluid" src="{{ asset('logos/HD-lOGO/WHITE-HD.png') }}" alt="" height="30">
                    </span>
                    </a>
                </div>
            </div>

            <div class="d-flex">
                <div class="dropdown d-inline-block">
{{--                    <img src="{{ isset( Auth::user()->image ) ? url(Auth::user()->image) : "" }}" alt="" class="img-flag">--}}
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ Auth::user()->name }}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
{{--                    <div class="dropdown-menu dropdown-menu-end" style="background-color: #EC1D25 !important">--}}
                        <!-- item-->
                        <a class="dropdown-item" style="color: #EEF1F6" href=""><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>

                        <a class="dropdown-item" style="color: #EEF1F6" href="{{ route('logout') }}" id="logout_link"><i class="bx bx-power-off font-size-16 align-middle me-1"></i> <span key="t-logout">Logout</span></a>
                    </div>
                </div>
            </div>
        </div>

        <form method="POST" action="{{ route( 'admin.logout' ) }}" id="logout_form">
            @csrf
        </form>
    </header>
