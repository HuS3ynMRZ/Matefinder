<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="shortcut icon" href="{{ asset('logos/FEVICON/FEVICON.png') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('loginassets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('loginassets/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('loginassets/css/iofrm-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('loginassets/css/iofrm-theme12.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset( 'css/register/register.css' ) }}">
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

                            <div class="page-links">
                                <a href="{{ route( 'login' ) }}">Login</a><a href="{{ route( 'register' ) }}" class="active">Register</a>
                            </div>

                            <form method="POST" action="{{ route('register') }}" id="register_form">
                                @csrf

                                <div class="form-group text-left">
                                    <select id="role" name="role" class="form-control @error( 'role' ) is-invalid @enderror input_field">
                                        <option value="">Select Role</option>

                                        @php
                                            $vendor_role_status = "";
                                            $customer_role_status = "";
                                        @endphp

                                        @if ( old( "role" ) )
                                            @if ( old( "role" ) == 2 )
                                                @php $vendor_role_status = "selected"; @endphp
                                            @elseif ( old( "role" == 3 ) )
                                                @php $customer_role_status = "selected"; @endphp
                                            @endif
                                        @endif

                                        <option value="2" {{ $vendor_role_status }}>Vendor</option>
                                        <option value="3" {{ $customer_role_status }}>Customer</option>
                                    </select>

                                    @error('role')
                                        <small class="text-danger form-text">{{ $message }}</small>
                                    @enderror

                                    <small class="text-danger input_field_validation_error form-text"
                                           id="role_validation_error"></small>
                                </div>

                                <div class="form-group text-left">
                                    <input class="form-control @error('name') is-invalid @enderror input_field m-0" type="text"
                                           name="name" id="name" placeholder="Full Name" value="{{ old('name') }}">

                                    @error('name')
                                        <small class="text-danger form-text">{{ $message }}</small>
                                    @enderror

                                    <small class="text-danger input_field_validation_error form-text"
                                           id="name_validation_error"></small>
                                </div>

                                <div class="form-group text-left">
                                    <input class="form-control @error('email') is-invalid @enderror input_field m-0" type="text"
                                           name="email" id="email" placeholder="E-mail Address" value="{{ old( 'email' ) }}">

                                    @error('email')
                                        <small class="text-danger form-text">{{ $message }}</small>
                                    @enderror

                                    <small class="text-danger input_field_validation_error form-text"
                                           id="email_validation_error"></small>
                                </div>

                                <div class="form-group text-left">
                                    <input class="form-control @error('password') is-invalid @enderror input_field m-0"
                                           type="password" name="password" id="password" placeholder="Password"
                                           autocomplete="new-password">

                                    @error('password')
                                        <small class="text-danger form-text">{{ $message }}</small>
                                    @enderror

                                    <small class="text-danger input_field_validation_error form-text"
                                           id="password_validation_error"></small>
                                </div>

                                <div class="form-group text-left">
                                    <input class="form-control input_field m-0" type="password" name="password_confirmation"
                                           id="confirm_password" placeholder="Confirm Password" autocomplete="new-password">

                                    <small class="text-danger input_field_validation_error form-text"
                                           id="confirm_password_validation_error"></small>
                                </div>

                                <div class="form-button">
                                    <button id="submit" type="submit" class="ibtn">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('loginassets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('loginassets/js/popper.min.js') }}"></script>
        <script src="{{ asset('loginassets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('loginassets/js/main.js') }}"></script>
        <script src="{{ asset( 'js/validations.js' ) }}"></script>
        <script src="{{ asset( 'js/register/register.js' ) }}"></script>
    </body>
</html>
