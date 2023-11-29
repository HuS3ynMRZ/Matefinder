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
                <h2>Login Form</h2>
{{--                <p>Login here to use </p>--}}
                @include('message.message')
            </div><!--/.section-header-->
            <form action="{{ route('login') }}" id="loginform" method="post">
                @csrf
                <div class="row jumbotron" style="margin-top: 5rem">
                   <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">
                            <label for="email">Email<span class="text-danger"><small>*</small></span></label>
                            <input type="email" placeholder="Enter Email..." class="form-control" required name="email">
                        </div>
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">
                            <label for="password">Password<span class="text-danger"><small>*</small></span></label>
                            <input id="password" type="password" placeholder="Enter Password..." class="form-control" required name="password">
                        </div>
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Login</button>
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
            $("#loginform").validate();
        </script>
    @endpush

@endsection
