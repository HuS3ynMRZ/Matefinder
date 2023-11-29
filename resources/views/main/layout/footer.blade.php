<!--footer start-->
<footer id="footer"  class="footer">
    <div class="container">
        <div class="footer-menu">
            <div class="row">
                <div class="col-sm-3">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{ url('/') }}">list<span>race</span></a>
                    </div><!--/.navbar-header-->
                </div>
                <div class="col-sm-9">
                    <ul class="footer-menu-item">
                        <li class="scroll"><a href="#works">how it works</a></li>
                        <li class="scroll"><a href="#explore">explore</a></li>
                        <li class="scroll"><a href="#reviews">review</a></li>
                        <li class="scroll"><a href="#blog">blog</a></li>
                        <li class="scroll"><a href="#contact">contact</a></li>
                        <li class=" scroll"><a href="#contact">my account</a></li>
                    </ul><!--/.nav -->
                </div>
            </div>
        </div>
        <div class="hm-footer-copyright">
            <div class="row">
                <div class="col-sm-5">
                    <p>
                        &copy;copyright. designed and developed by <a href="https://www.themesine.com/">themesine</a>
                    </p><!--/p-->
                </div>
                <div class="col-sm-7">
                    <div class="footer-social">
                        <span><i class="fa fa-phone"> +1  (222) 777 8888</i></span>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>

        </div><!--/.hm-footer-copyright-->
    </div><!--/.container-->

    <div id="scroll-Top">
        <div class="return-to-top">
            <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
        </div>

    </div><!--/.scroll-Top-->

</footer><!--/.footer-->
<!--footer end-->

<!-- Include all js compiled plugins (below), or include individual files as needed -->

<script src="{{ asset('public/assets/js/jquery.js') }}"></script>

<!--modernizr.min.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

<!--bootstrap.min.js-->
<script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>

<!-- bootsnav js -->
<script src="{{ asset('public/assets/js/bootsnav.js') }}"></script>

<!--feather.min.js-->
<script  src="{{ asset('public/assets/js/feather.min.js') }}"></script>

<!-- counter js -->
<script src="{{ asset('public/assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('public/assets/js/waypoints.min.js') }}"></script>

<!--slick.min.js-->
<script src="{{ asset('public/assets/js/slick.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<!--Custom JS-->
<script src="{{ asset('public/assets/js/custom.js') }}"></script>

@stack('js')

</body>

</html>
