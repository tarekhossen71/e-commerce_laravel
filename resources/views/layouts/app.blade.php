<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>@yield('title') | E-commerce</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{ asset('backend') }}/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{ asset('backend') }}/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{ asset('backend') }}/assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    @method('style')
    <style>
        .breadcrumb-nav li{
            display: inline-block;
        }
        .breadcrumb-nav li:first-child::before{
            padding: 0;
            content: '';
        }
        .breadcrumb-nav li::before{
            padding-right: 0.5rem;
            padding-left: 0.5rem;
            color: #868e96;
            content: '/';
        }
        .breadcrumb-nav li.active a{
            color: #23b7e5;
        }
    </style>
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        @include('backend.pages.header')
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        @include('backend.pages.sidebar')
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                {{-- Breadcrumb Start --}}
                <div class="ibox">
                    <div class="ibox-body px-3 d-flex align-items-center justify-content-between">
                        <ul class="mb-0 pl-0 breadcrumb-nav">
                            <li>Dashboard</li>
                            <li class="active"><a href="#">Dashboard</a></li>
                        </ul>
                        <div class="action-btn">
                            @yield('action')
                        </div>
                    </div>
                </div>
                {{-- Breadcrumb End --}}
                @yield('content')
            </div>
            <!-- END PAGE CONTENT-->
            @include('backend.pages.footer')
        </div>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    {{-- <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div> --}}
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="{{ asset('backend') }}/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="{{ asset('backend') }}/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="{{ asset('backend') }}/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{ asset('backend') }}/assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="{{ asset('backend') }}/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="{{ asset('backend') }}/assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <script src="{{ asset('backend') }}/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="{{ asset('backend') }}/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="{{ asset('backend') }}/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{ asset('backend') }}/assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="{{ asset('backend') }}/assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
    @stack('script')
</body>
</html>