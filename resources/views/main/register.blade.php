@extends('main.layout.app')
@section('content')
    @push('css')
        <style>
            .error{
                color: red;
            }
        </style>
    @endpush
    <!-- top-area Start -->
    <section class="top-area">
        <div class="header-area">
            <!-- Start Navigation -->
            <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

                <div class="container">

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}">Mate<span>Finder</span></a>

                    </div><!--/.navbar-header-->
                    <!-- End Header Navigation -->

                </div><!--/.container-->
            </nav><!--/nav-->
            <!-- End Navigation -->
        </div><!--/.header-area-->
        <div class="clearfix"></div>

    </section><!-- /.top-area-->
    <!-- top-area End -->

    <!--works start -->
    <section style="margin-top: 5rem">
        <div class="container">
            <div class="section-header">
                <h2>Registration Form</h2>
                <p>Register here to stay connected</p>
                @include('message.message')
            </div><!--/.section-header-->
            <form action="{{ route('register') }}" id="registerform" method="post">
                @csrf
                <div class="row jumbotron" style="margin-top: 5rem">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">First Name<span class="text-danger"><small>*</small></span></label>
                            <input type="text" placeholder="Enter First Name..." class="form-control" required name="first_name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="last_name">Last Name<span class="text-danger"><small>*</small></span></label>
                            <input type="text" placeholder="Enter Last Name..." class="form-control" required name="last_name">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email<span class="text-danger"><small>*</small></span></label>
                            <input type="email" placeholder="Enter Email..." class="form-control" required name="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone<span class="text-danger"><small>*</small></span></label>
                            <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "12" type="number" placeholder="Enter Phone Number..." class="form-control" required name="phone">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="country">Select Country<span class="text-danger"><small>*</small></span></label>
                            <select name="country_id" id="country_id" class="form-control" required>
                                <option selected disabled>Select Country</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->country_id }}">{{ isset( $country->CNT_name ) ? $country->CNT_name : "" }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Address<span class="text-danger"><small>*</small></span></label>
                            <input type="text" placeholder="Enter Address..." class="form-control" required name="address">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Password<span class="text-danger"><small>*</small></span></label>
                            <input id="password" type="password" placeholder="Enter Password..." class="form-control" required name="password">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password_confirm">Confirm Password<span class="text-danger"><small>*</small></span></label>
                            <input type="password" placeholder="Enter Confirm Password..." class="form-control" required name="password_confirm">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </div>
            </form>
        </div><!--/.container-->

    </section><!--/.works-->
    <!--works end -->


    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
        <script>
            $("#registerform").validate({
                rules: {
                    password: {
                        minlength: 5,
                    },
                    password_confirm: {
                        minlength: 5,
                        equalTo: "#password"
                    }
                },
                messages: {
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 6 characters long"
                    },
                    password_confirm: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 6 characters long",
                        equalTo: "Please enter the same password"
                    }
                }
            });
        </script>
    @endpush

@endsection
