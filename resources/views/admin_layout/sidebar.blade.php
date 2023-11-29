<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">
{{--    <div data-simplebar class="h-100" style="background-color: #EC1D25 !important">--}}

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" style="color: white" key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>

                        <span key="t-dashboards">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.categories.index') }}" class="waves-effect">
                        <i class="bx bx-list-ul"></i>

                        <span key="t-driver">Games</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
