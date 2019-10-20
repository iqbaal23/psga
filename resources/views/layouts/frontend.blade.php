<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="materialize is a responsive creative agency template">
    <meta name="keywords"
          content="material, material design, material design, card style, material template, portfolio, corporate, business, creative, agency">
    <meta name="author" content="trendytheme.net">

    <title>PSGA</title>

    <!--  favicon -->
    <link rel="shortcut icon" href="{{asset('public/frontend/assets/img/ico/favicon.png')}}">
    <!--  apple-touch-icon -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <!-- Material Icons CSS -->
    <link href="{{asset('public/frontend/assets/fonts/iconfont/material-icons.css')}}" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="{{asset('public/frontend/assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- owl.carousel -->
    <link href="{{asset('public/frontend/assets/owl.carousel/assets/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/assets/owl.carousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <!-- magnific-popup -->
    <link href="{{asset('public/frontend/assets/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
    <!-- flexslider -->
    <link href="{{asset('public/frontend/assets/flexSlider/flexslider.css')}}" rel="stylesheet">
    <!-- materialize -->
    <link href="{{asset('public/frontend/assets/materialize/css/materialize.min.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('public/frontend/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- shortcodes -->
    <link href="{{asset('public/frontend/assets/css/shortcodes/shortcodes.css')}}" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="{{asset('public/frontend/style.css')}}" rel="stylesheet">
    <!-- Creative CSS -->
    <link href="{{asset('public/frontend/assets/css/skins/creative.css')}}" rel="stylesheet">
    @yield('styles')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="top" class="has-header-search">

<!--header start-->
<header id="header" class="tt-nav transparent-header nav-border-bottom">

    <div class="header-sticky light-header">

        <div class="container">

            <div class="search-wrapper">
                <div class="search-trigger light pull-right">
                    <div class='search-btn'></div>
                    <i class="material-icons">&#xE8B6;</i>
                </div>

                <!-- Modal Search Form -->
                <i class="search-close material-icons">&#xE5CD;</i>
                <div class="search-form-wrapper">
                    <form action="#" class="white-form">
                        <div class="input-field">
                            <input type="text" name="search" id="search">
                            <label for="search" class="">Search Here...</label>
                        </div>
                        <button class="btn pink search-button waves-effect waves-light" type="submit"><i
                                class="material-icons">&#xE8B6;</i></button>

                    </form>
                </div>
            </div><!-- /.search-wrapper -->


            <div id="materialize-menu" class="menuzord">

                <!--logo start-->
                <a href="index.html" class="logo-brand">
                    <img class="logo-dark" src="{{asset('public/frontend/assets/img/dekan.png')}}" alt=""/>
                    <img class="logo-light" src="{{asset('public/frontend/assets/img/dekan.png')}}" alt=""/>
                </a>
                <!--logo end-->

                <!-- menu start-->
                <ul class="menuzord-menu pull-right light">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/artikel')}}">Artikel</a></li>
                    <li><a href="{{url('/jurnal')}}">Jurnal</a></li>
                    <li><a href="{{url('/kegiatan')}}">Kegiatan</a></li>
                    <li><a href="{{url('/about')}}">About</a></li>
                    <li><a href="{{url('/pengumuman')}}">Pengumuman</a></li>
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form></li>
                        @else
                        <li><a href="{{url('/peserta-login')}}">Login</a></li>
                        @endif
                </ul>
                <!-- menu end-->

            </div>
        </div>
    </div>
</header>
<!--header end-->
@yield('frontend_content')

<footer class="footer footer-one">
    <div class="primary-footer brand-bg">
        <div class="container">
            <a href="#top" class="page-scroll btn-floating btn-large pink back-top waves-effect waves-light"
               data-section="#top">
                <i class="material-icons">&#xE316;</i>
            </a>

            <div class="row">
                <div class="col-md-5 widget clearfix">
                    <h2 class="white-text">About PSGA</h2>
                    <p>(PSG) adalah sebuah unit di UIN SUSKA yang memiliki tugas dan fungsi mendorong
                        terwujudnya keadilan dan kesetaraan gender di lingkungan kampus dan masyarakat umum. PSG
                        didirikan atas pertimbangan bahwa masyarakat </p>

                    <ul class="social-link tt-animate ltr">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 widget">
                    <h2 class="white-text">News Letter Widget</h2>

                    <form>
                        <div class="form-group clearfix">
                            <label class="sr-only" for="subscribe">Email address</label>
                            <input type="email" class="form-control" id="subscribe" placeholder="Email address">
                            <button type="submit" class="tt-animate ltr"><i class="fa fa-long-arrow-right"></i></button>
                        </div>
                    </form>


                    <div class="widget-tags">
                        <h2 class="white-text">Tag Cloud</h2>
                        <a href="#">Material</a>
                        <a href="#">Design</a>
                        <a href="#">Google</a>
                        <a href="#">Gallery</a>
                        <a href="#">Flat Design</a>
                        <a href="#">Clean</a>
                        <a href="#">Portfolio</a>
                    </div><!-- /.widget-tags -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.primary-footer -->

    <div class="secondary-footer brand-bg darken-2">
        <div class="container">
            <span class="copy-text">Copyright &copy; <?= date('Y') ?>
                <a href="{{url('/')}}">PSGA</a> &nbsp;  | &nbsp;  All Rights Reserved &nbsp;  | &nbsp;   By <a
                    href="#">NURUL & MUTIA</a></span>
        </div><!-- /.container -->
    </div><!-- /.secondary-footer -->
</footer>


<!-- Preloader -->
<div id="preloader">
    <div class="preloader-position">
        <img src="{{asset('public/frontend/assets/img/logo-colored.png')}}" alt="logo">
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>
</div>
<!-- End Preloader -->


<!-- jQuery -->
<script src="{{asset('public/frontend/assets/js/jquery-2.1.3.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/materialize/js/materialize.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/smoothscroll.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/jquery.inview.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/menuzord.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/equalheight.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/imagesloaded.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/jquery.countTo.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/jquery.shuffle.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/twitterFetcher.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/flexSlider/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('public/frontend/assets/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/scripts.js')}}"></script>
@yield('script')
<script>
    $('div.alert').not('.alert-important').delay(3000).slideUp(300);
</script>
</body>

</html>
