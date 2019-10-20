<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>Backend</title>

    <link rel="apple-touch-icon" href="{{asset('public/assets/images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('public/assets/images/favicon.ico')}}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('public/global/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/css/bootstrap-extend.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/site.min.css')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('public/global/vendor/animsition/animsition.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/vendor/asscrollable/asScrollable.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/vendor/switchery/switchery.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/vendor/intro-js/introjs.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/vendor/slidepanel/slidePanel.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/vendor/flag-icon-css/flag-icon.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/vendor/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet"
          href="{{asset('public/global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css')}}">
    <link rel="stylesheet"
          href="{{asset('public/global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css')}}">
    <link rel="stylesheet"
          href="{{asset('public/global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css')}}">
    <link rel="stylesheet"
          href="{{asset('public/global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css')}}">
    <link rel="stylesheet"
          href="{{asset('public/global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css')}}">
    <link rel="stylesheet"
          href="{{asset('public/global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css')}}">
    <link rel="stylesheet"
          href="{{asset('public/global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/examples/css/tables/datatable.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/vendor/animsition/animsition.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/vendor/asscrollable/asScrollable.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/vendor/switchery/switchery.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/vendor/intro-js/introjs.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/vendor/slidepanel/slidePanel.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/vendor/flag-icon-css/flag-icon.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/vendor/summernote/summernote.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/vendor/bootstrap-datepicker/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/vendor/dropify/dropify.css')}}">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('public/global/fonts/font-awesome/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/fonts/web-icons/web-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/global/fonts/brand-icons/brand-icons.min.css')}}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
    <script src="{{asset('public/global/vendor/html5shiv/html5shiv.min.js')}}"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="{{asset('public/global/vendor/media-match/media.match.min.js')}}"></script>
    <script src="{{asset('public/global/vendor/respond/respond.min.js')}}"></script>
    <![endif]-->
    <style>
        .btn-primary {
            color: #fff;
            background-color: #3e8ef7;
            border-color: #3e8ef7;
            box-shadow: none;
            border-radius: 20px 20px 20px !important;
        }

        .btn-default {
            color: #111;
            background-color: #e4eaec;
            border-color: #e4eaec;
            box-shadow: none;
            border-radius: 20px 20px 20px !important;

        }

        .btn-warning {
            color: #eb6709;
            margin-top: 2px !important;
            background-color: transparent;
            border-color: #eb6709;
            border-radius: 20px 20px 20px !important;

        }
    </style>
    <!-- Scripts -->
    <script src="{{asset('public/global/vendor/breakpoints/breakpoints.js')}}"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class="animsition">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
                data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
                data-toggle="collapse">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
            <img class="navbar-brand-logo" src="{{asset('public/assets/images/logo.png')}}" title="Remark">
            <span class="navbar-brand-text hidden-xs-down"> PSGA</span>
        </div>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
                data-toggle="collapse">
            <span class="sr-only">Toggle Search</span>
            <i class="icon wb-search" aria-hidden="true"></i>
        </button>
    </div>

    <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <!-- Navbar Toolbar -->
            <ul class="nav navbar-toolbar">
                <li class="nav-item hidden-float" id="toggleMenubar">
                    <a class="nav-link" data-toggle="menubar" href="#" role="button">
                        <i class="icon hamburger hamburger-arrow-left">
                            <span class="sr-only">Toggle menubar</span>
                            <span class="hamburger-bar"></span>
                        </i>
                    </a>
                </li>
                <li class="nav-item hidden-sm-down" id="toggleFullscreen">
                    <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                        <span class="sr-only">Toggle fullscreen</span>
                    </a>
                </li>
                <li class="nav-item hidden-float">
                    <a class="nav-link icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
                       role="button">
                        <span class="sr-only">Toggle Search</span>
                    </a>
                </li>
            </ul>
            <!-- End Navbar Toolbar -->

            <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->

        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
            <form role="search">
                <div class="form-group">
                    <div class="input-search">
                        <i class="input-search-icon wb-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="site-search" placeholder="Search...">
                        <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                                data-toggle="collapse" aria-label="Close"></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Site Navbar Seach -->
    </div>
</nav>
<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu" data-plugin="menu">
                    <li class="site-menu-category">General</li>
                    <li class="{{ substr(url()->full(), 28) == 'home' ? 'active' : '' }} site-menu-item">
                        <a href="{{url('admin/home')}}">
                            <i class="site-menu-icon wb-grid-4"></i>
                            <span class="site-menu-title">Home</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="site-menu-icon fa fa-sign-out"></i>
                            <span class="site-menu-title">{{ __('Logout') }}</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </li>
                    <li class="site-menu-category">Artikel</li>
                    <li class="{{ substr(url()->full(), 28) == 'artikel-index' ? 'active' : '' }} site-menu-item">
                        <a href="{{url('admin/artikel-index')}}">
                            <i class="site-menu-icon fa fa-archive"></i>
                            <span class="site-menu-title">Artikel</span>
                        </a>
                    </li>
                    <li class="site-menu-category">Kegiatan</li>
                    <li class="{{ substr(url()->full(), 28) == 'jenis-kegiatan-index' ? 'active' : '' }} site-menu-item">
                        <a href="{{url('admin/jenis-kegiatan-index')}}">
                            <i class="site-menu-icon wb-grid-4"></i>
                            <span class="site-menu-title">Jenis Kegiatan</span>
                        </a>
                    </li>
                    <li class="{{ substr(url()->full(), 28) == 'kegiatan-index' ? 'active' : '' }} site-menu-item">
                        <a href="{{url('admin/kegiatan-index')}}">
                            <i class="site-menu-icon wb-grid-4"></i>
                            <span class="site-menu-title">Kegiatan</span>
                        </a>
                    </li>
                    <li class="site-menu-category">Lomba</li>
                    <li class="{{ substr(url()->full(), 28) == 'listpendaftaran' ? 'active' : '' }} site-menu-item">
                        <a href="{{url('admin/listpendaftaran')}}">
                            <i class="site-menu-icon wb-grid-4"></i>
                            <span class="site-menu-title">Data Lomba</span>
                        </a>
                    </li>
                    <li class="{{ substr(url()->full(), 28) == 'kegiatan-juara' ? 'active' : '' }} site-menu-item">
                        <a href="{{url('admin/kegiatan-juara')}}">
                            <i class="site-menu-icon wb-grid-4"></i>
                            <span class="site-menu-title">Data Juara</span>
                        </a>
                    </li>
                    <li class="site-menu-category">Jurnal</li>
                    <li class="{{ substr(url()->full(), 28) == 'jurnal-index' ? 'active' : '' }} site-menu-item">
                        <a href="{{url('admin/jurnal-index')}}">
                            <i class="site-menu-icon wb-grid-4"></i>
                            <span class="site-menu-title">Data Jurnal</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="site-menubar-footer">
        <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
           data-original-title="Settings">
            <span class="icon wb-settings" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
            <span class="icon wb-eye-close" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon wb-power" aria-hidden="true"></span>
        </a>
    </div>
</div>

<!-- Page -->
<div class="page">
    <div class="page-content">
        <main>
            @yield('content')
        </main>
    </div>
</div>
<!-- End Page -->


<!-- Footer -->
<footer class="site-footer">
    <div class="site-footer-legal">© 2018 <a
            href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
    <div class="site-footer-right">
        Crafted with <i class="red-600 wb wb-heart"></i> by <a href="https://themeforest.net/user/creation-studio">Creation
            Studio</a>
    </div>
</footer>
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
<script src="{{asset('public/global/vendor/switchery/switchery.js')}}"></script>
<script src="{{asset('public/global/vendor/intro-js/intro.js')}}"></script>
<script src="{{asset('public/global/vendor/screenfull/screenfull.js')}}"></script>
<script src="{{asset('public/global/vendor/slidepanel/jquery-slidePanel.js')}}"></script>
<script src="{{asset('public/global/vendor/summernote/summernote.min.js')}}"></script>
<script src="{{asset('public/global/vendor/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('public/global/vendor/dropify/dropify.min.js')}}"></script>


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
<script src="{{asset('public/global/js/Plugin/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('public/assets/examples/js/tables/datatable.js')}}"></script>
<script src="{{asset('public/global/js/Plugin/dropify.js')}}"></script>
<script>
    $('div.alert').not('.alert-important').delay(3000).slideUp(300);
</script>
<script>
    $('#summernote').summernote({
        placeholder: 'Isi Artikel',
        tabsize: 2,
        height: 200
    });
    $('#summernotes').summernote({
        placeholder: 'Isi Artikel',
        tabsize: 2,
        height: 200
    });
</script>
</body>
</html>
