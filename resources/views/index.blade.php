<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @section('title')
            PayEm | Payroll Management System
            @show
        </title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="Decision Supporting System for Accounting" name="description" />
        <meta content="" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Favicon icon -->
        <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
        <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">

        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

        <!-- themify -->
        <link rel="stylesheet" type="text/css" href="/assets/icon/themify-icons/themify-icons.css">

        <!-- iconfont -->
        <link rel="stylesheet" type="text/css" href="/assets/icon/icofont/css/icofont.css">

        <!-- simple line icon -->
        <link rel="stylesheet" type="text/css" href="/assets/icon/simple-line-icons/css/simple-line-icons.css">

        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap/css/bootstrap.min.css">

        <!-- Chartlist chart css -->
        <link rel="stylesheet" href="/assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

        <!-- Weather css -->
        <link href="/assets/css/svg-weather.css" rel="stylesheet">

        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/main.css">

        <!-- Responsive.css-->
        <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">

    </head>
    <body class="sidebar-mini fixed">
        <div class="loader-bg">
            <div class="loader-bar">
            </div>
        </div>
        <div class="wrapper">
            <!-- Navbar-->
            @include('layouts.topbar')
            <!-- Side-Nav-->
            @include('layouts.leftbar')
            <!-- Sidebar chat start -->
            @include('layouts.rightbar')
            <div class="content-wrapper">
                <!-- Container-fluid starts -->
                <!-- Main content starts -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="main-header">
                            <h4>
                            @section('content-header')
                            @show
                            </h4>
                            @section('content-breadcumb')
                            @show
                        </div>
                    </div>
                    @include('flash-message')
                    @yield('content')
                </div>
                <!-- Main content ends -->
                <!-- Container-fluid ends -->
                <div class="fixed-button">
                    <a href="#!" class="btn btn-md btn-primary">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
                    </a>
                </div>
            </div>
        </div>
        <!-- Required Jquery -->
        <script src="/assets/plugins/Jquery/dist/jquery.min.js"></script>
        <script src="/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="/assets/plugins/tether/dist/js/tether.min.js"></script>

        <!-- Required Fremwork -->
        <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- Scrollbar JS-->
        <script src="/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="/assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

        <!--classic JS-->
        <script src="/assets/plugins/classie/classie.js"></script>

        <!-- notification -->
        <script src="/assets/plugins/notification/js/bootstrap-growl.min.js"></script>

        <!-- Sparkline charts -->
        <script src="/assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

        <!-- Counter js  -->
        <script src="/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="/assets/plugins/countdown/js/jquery.counterup.js"></script>

        <!-- Echart js -->
        <script src="/assets/plugins/charts/echarts/js/echarts-all.js"></script>

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/highcharts-3d.js"></script>

        <!-- custom js -->
        <script type="text/javascript" src="/assets/js/main.min.js"></script>
        <script type="text/javascript" src="/assets/pages/dashboard.js"></script>
        <script type="text/javascript" src="/assets/pages/elements.js"></script>
        <script src="/assets/js/menu.min.js"></script>
        <script>
        var $window = $(window);
        var nav = $('.fixed-button');
        $window.scroll(function(){
            if ($window.scrollTop() >= 200) {
            nav.addClass('active');
            }
            else {
            nav.removeClass('active');
            }
        });
        </script>
    </body>
</html>
