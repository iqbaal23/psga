<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>Auth</title>

    <link rel="apple-touch-icon" href="{{asset('public/assets/images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('public/assets/images/favicon.ico')}}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('public/global/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/css/bootstrap-extend.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/site.min.css')}}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('public/global/vendor/animsition/animsition.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/vendor/asscrollable/asScrollable.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/vendor/switchery/switchery.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/vendor/intro-js/introjs.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/vendor/slidepanel/slidePanel.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/vendor/flag-icon-css/flag-icon.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/examples/css/pages/login-v2.css')}}">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('public/global/fonts/font-awesome/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/fonts/web-icons/web-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/fonts/brand-icons/brand-icons.min.css')}}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
    <script src="{{asset('public/global/vendor/html5shiv/html5shiv.min.js')}}"></script>
    <![endif]-->

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!--[if lt IE 10]>
    <script src="{{asset('public/global/vendor/media-match/media.match.min.js')}}"></script>
    <script src="{{asset('public/global/vendor/respond/respond.min.js')}}"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="{{asset('publicglobal/vendor/breakpoints/breakpoints.js')}}"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class="animsition page-login-v2 layout-full page-dark">
<style>
    body {
        background: transparent;
    }
</style>
<!-- Page -->
@yield('login_content')

<!-- End Page -->
<!-- Core  -->
<script src="{{asset('public/global/vendor/babel-external-helpers/babel-external-helpers.js')}}"></script>
<script src="{{asset('public/global/vendor/jquery/jquery.js')}}"></script>
<script src="{{asset('public/global/vendor/popper-js/umd/popper.min.js')}}"></script>
<script src="{{asset('public/global/vendor/bootstrap/bootstrap.js')}}"></script>
<script src="{{asset('public/global/vendor/animsition/animsition.js')}}"></script>
<script src="{{asset('public/global/vendor/mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('public/global/vendor/asscrollbar/jquery-asScrollbar.js')}}"></script>
<script src="{{asset('public/global/vendor/asscrollable/jquery-asScrollable.js')}}"></script>
<script src="{{asset('public/global/vendor/ashoverscroll/jquery-asHoverScroll.js')}}"></script>

<!-- Plugins -->
<script src="{{asset('public/global/vendor/switchery/switchery.js')}}"></script>
<script src="{{asset('public/global/vendor/intro-js/intro.js')}}"></script>
<script src="{{asset('public/global/vendor/screenfull/screenfull.js')}}"></script>
<script src="{{asset('public/global/vendor/slidepanel/jquery-slidePanel.js')}}"></script>
<script src="{{asset('public/global/vendor/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{asset('public/global/vendor/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('public/global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js')}}"></script>
<script src="{{asset('public/global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js')}}"></script>
<script src="{{asset('public/global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js')}}"></script>
<script src="{{asset('public/global/vendor/datatables.net-scroller/dataTables.scroller.js')}}"></script>
<script src="{{asset('public/global/vendor/datatables.net-responsive/dataTables.responsive.js')}}"></script>
<script src="{{asset('public/global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js')}}"></script>
<script src="{{asset('public/global/vendor/datatables.net-buttons/dataTables.buttons.js')}}"></script>
<script src="{{asset('public/global/vendor/datatables.net-buttons/buttons.html5.js')}}"></script>
<script src="{{asset('public/global/vendor/datatables.net-buttons/buttons.flash.js')}}"></script>
<script src="{{asset('public/global/vendor/datatables.net-buttons/buttons.print.js')}}"></script>
<script src="{{asset('public/global/vendor/datatables.net-buttons/buttons.colVis.js')}}"></script>
<script src="{{asset('public/global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js')}}"></script>
<script src="{{asset('public/global/vendor/asrange/jquery-asRange.min.js')}}"></script>
<script src="{{asset('public/global/vendor/bootbox/bootbox.js')}}"></script>

<!-- Scripts -->
<script src="{{asset('public/global/js/Component.js')}}"></script>
<script src="{{asset('public/global/js/Plugin.js')}}"></script>
<script src="{{asset('public/global/js/Base.js')}}"></script>
<script src="{{asset('public/global/js/Config.js')}}"></script>

<script src="{{asset('public/assets/js/Section/Menubar.js')}}"></script>
<script src="{{asset('public/assets/js/Section/GridMenu.js')}}"></script>
<script src="{{asset('public/assets/js/Section/Sidebar.js')}}"></script>
<script src="{{asset('public/assets/js/Section/PageAside.js')}}"></script>
<script src="{{asset('public/assets/js/Plugin/menu.js')}}"></script>

<script src="{{asset('public/global/js/config/colors.js')}}"></script>
<script src="{{asset('public/assets/js/config/tour.js')}}"></script>
<script>Config.set('assets', '{{asset('public/assets')}}');</script>

<!-- Page -->
<script src="{{asset('public/assets/js/Site.js')}}"></script>
<script src="{{asset('public/global/js/Plugin/asscrollable.js')}}"></script>
<script src="{{asset('public/global/js/Plugin/slidepanel.js')}}"></script>
<script src="{{asset('public/global/js/Plugin/switchery.js')}}"></script>
<script src="{{asset('public/global/js/Plugin/datatables.js')}}"></script>

<script src="{{asset('public/assets/examples/js/tables/datatable.js')}}"></script>
</body>
</html>
