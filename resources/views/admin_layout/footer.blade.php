<!-- JAVASCRIPT -->
<script src="{{ asset('public/panel_assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('public/panel_assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/panel_assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('public/panel_assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('public/panel_assets/libs/node-waves/waves.min.js') }}"></script>

<!-- dashboard init -->
{{--<script src="{{ asset('public/panel_assets/js/pages/dashboard.init.js') }}"></script>--}}

<!-- App js -->
<script src="{{ asset('public/panel_assets/js/app.js') }}"></script>
{{--<script src="{{ asset('js/header/header.js') }}"></script>--}}
<script src="{{ asset( 'public/js/datatables/datatables.min.js' ) }}"></script>
<script src="{{ asset( 'public/js/datatables/datatables.buttons.min.js' ) }}"></script>
<script src="{{ asset( 'public/js/datatables/jszip.min.js' ) }}"></script>
<script src="{{ asset( 'public/js/datatables/pdfmake.min.js' ) }}"></script>
<script src="{{ asset( 'public/js/datatables/vfs_fonts.js' ) }}"></script>
<script src="{{ asset( 'public/js/datatables/buttons.html5.min.js' ) }}"></script>
<script src="{{ asset( 'public/js/datatables/buttons.print.min.js' ) }}"></script>

<script>
    $( document ).ready( function () {
        $( ".main-content" ).removeClass( "d-none" );

        $( ".data_table" ).DataTable({order:[[1,"asc"]]});
    } );
</script>
@stack('scripts')
</body>
</html>
