@extends('admin_layout.app')
@section('title')
    Dashboard
@endsection
@push('css')
    <style type="text/css">
        .highcharts-button {
            visibility: hidden;
        }

        .userinfo_box {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .userinfo_box figure,
        .userinfo_box figcaption {
            margin: 0;
        }

        .userinfo_box figure {
            min-width: 40px;
            width: 40px;
            height: 40px;
            borders-radius: 40px;
            overflow: hidden;
            margin-right: 10px;
        }

        .userinfo_box figure img {
            width: 40px;
            height: 40px;
            borders-radius: 40px;
            object-fit: cover;
        }

        .userinfo_box figcaption {
            font-size: 16px;
            color: #a05ca9;
            font-weight: 600;
            line-height: 1.4;
        }

        .userinfo_box figcaption small {
            color: #999;
            text-transform: capitalize;
            display: block;
        }

        .fw-500 {
            font-weight: 500;
        }

        .announcements_wrap {
            height: 380px;
            overflow: auto;
            overflow-x: hidden;
            padding-right: 1rem;
        }

        .ellPara {
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }

        .text-purple {
            color: #a05ca9;
        }

        .fs-36 {
            font-size: 36px !important;
        }

        .width-100p {
            width: 100%;
        }

        .announc_figwidth {
            width: calc(100% - 40px);
        }

        .borders{
            color: #EC1D25 !important;
        }
    </style>
@endpush
@section('content')
    <div class="main-content {{ config('app_logo.BLOCKCOLOR') }}">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18 {{ config('app_logo.BLOCKCOLOR') }}">Admin Dashboard </h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="#">
                                <div class="card mini-stats-wid">
                                    <div class="card-body {{ config('app_logo.BLOCKCOLOR') }} shadow-lg borders">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium {{ config('app_logo.BLOCKCOLOR') }}">Games</p>
                                                <h4 class="mb-0 {{ config('app_logo.BLOCKCOLOR') }}">
                                                    {{ \App\Game::count() }}
                                                </h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="bx bxs-bell-ring font-size-24"></i>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>

                        </div>
                        <!-- end row -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer {{ config('app_logo.BLOCKCOLOR') }}" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6" style="font-weight: bold">
                        <script>document.write(new Date().getFullYear())</script> © Remo.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
{{--                            Design & Develop by Themesbrand--}}
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
@push('scripts')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>

@endpush


