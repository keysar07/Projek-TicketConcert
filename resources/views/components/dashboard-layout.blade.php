<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dashboard2/./images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('dashboard2/./vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard2/./vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('dashboard2/./vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard2/./css/style.css') }}" rel="stylesheet">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('dashboard2/./images/logo.png') }}" alt="">
                <img class="logo-compact" src="{{ asset('dashboard2/./images/logo-text.png') }}" alt="">
                <img class="brand-title" src="{{ asset('dashboard2/./images/logo-text.png') }}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <x-nav-dashboard/>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <x-sidebar-dashboard/>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                {{ $slot }}
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <x-footer-dashboard/>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('dashboard2/./vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('dashboard2/./js/quixnav-init.js') }}"></script>
    <script src="{{ asset('dashboard2/./js/custom.min.js') }}"></script>


    <!-- Vectormap -->
    <script src="{{ asset('dashboard2/./vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('dashboard2/./vendor/morris/morris.min.js') }}"></script>


    <script src="{{ asset('dashboard2/./vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('dashboard2/./vendor/chart.js/Chart.bundle.min.js') }}"></script>

    <script src="{{ asset('dashboard2/./vendor/gaugeJS/dist/gauge.min.js') }}"></script>

    <!--  flot-chart js -->
    <script src="{{ asset('dashboard2/./vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('dashboard2/./vendor/flot/jquery.flot.resize.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('dashboard2/./vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

    <!-- Counter Up -->
    <script src="{{ asset('dashboard2/./vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('dashboard2/./vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('dashboard2/./vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>


    <script src="{{ asset('dashboard2/./js/dashboard/dashboard-1.js') }}"></script>

</body>

</html>