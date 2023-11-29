<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="shortcut icon" href="{{ asset('logos/FEVICON/FEVICON.png') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/loginassets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/loginassets/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/loginassets/css/iofrm-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/loginassets/css/iofrm-theme12.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset( 'public/css/register/register.css' ) }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>

    <body>
        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <div class="website-logo-inside">
                                <div class="">
                                    <img class="" src="{{ asset('logos/HD-lOGO/WHITE-HD.png') }}" alt="">
                                </div>
                            </div>

{{--                            <h3>Get more things done with Login platform.</h3>--}}
{{--                            <p>Access to the most powerful tool in the entire design and web industry.</p>--}}

{{--                            <div class="page-links">--}}
{{--                                <a href="{{ route( 'login' ) }}" class="active">Login</a><a href="{{ route( 'register' ) }}">Register</a>--}}
{{--                            </div>--}}

                            @include( "error.message" )

                            <form method="POST" action="{{ route('adminlogin') }}" id="login_form">
                                @csrf

                                <div class="form-group text-left">
                                    <input class="form-control @error('email') is-invalid @enderror input_field m-0" type="email" name="email" id="email" placeholder="E-mail Address" autofocus>

                                    @error('email')
                                        <small class="text-danger form-text">{{ $message }}</small>
                                    @enderror

                                    <small class="text-danger input_field_validation_error form-text" id="email_validation_error"></small>
                                </div>

                                <div class="form-group text-left">
                                    <input class="form-control @error('password') is-invalid @enderror input_field m-0" type="password" name="password" id="password" placeholder="Password">

                                    @error('password')
                                        <small class="text-danger form-text">{{ $message }}</small>
                                    @enderror

                                    <small class="text-danger input_field_validation_error form-text" id="password_validation_error"></small>
                                </div>

                                <div class="form-button">
                                    <button id="submit" type="submit" class="ibtn">Login</button>
                                    <!-- <a href="forget12.html">Forget password?</a> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('public/loginassets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('public/loginassets/js/popper.min.js') }}"></script>
        <script src="{{ asset('public/loginassets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/loginassets/js/main.js') }}"></script>
        <script src="{{ asset( 'public/js/login/login.js' ) }}"></script>
    </body>
</html>
