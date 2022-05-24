<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="irstheme">

    <title> AAnglo - @yield('title') </title>
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">

    <link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- start page-wrapper -->
<div class="page-wrapper">

    <!-- start preloader -->
    <div class="preloader">
        <div class="lds-roller">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- end preloader -->

    <!-- Start header -->
    <header id="header" class="site-header header-style-1">
        <div class="topbar">
            <div class="container-full">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="inner clearfix">
                            <div class="left-link">
                                <ul>
                                    <li><a href="">Ingresar</a></li>
                                    <li><a href="">Registrarse</a></li>
{{--                                    <li><a href="">Privacy policy</a></li>--}}
{{--                                    <li><a href="">Get in touch</a></li>--}}
                                </ul>
                            </div>
                            <div class="social-link">
                                <ul>
                                    <li><a href="#"><i class="ti ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti ti-pinterest-alt"></i></a></li>
                                    <li><a href="#"><i class="ti ti-vimeo-alt"></i></a></li>
                                    <li><a href="#"><i class="ti ti-flickr-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container-1310 -->
        </div> <!-- end topbar -->

        <nav id="site-navigation" class="navigation navbar navbar-default">
            <div class="container-full">
                <div class="navbar-header">
                    <button type="button" id="hamburger-menu" class="open-nav-btn open-btn" aria-label="open navigation" aria-controls="link-list" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href=""><img src="{{asset('assets/images/logo.png')}}" alt></a>
                </div>
                <div id="slide-nav" class="navbar-collapse collapse navigation-holder slide-content">
                    <button  type="button" id="close" class="close-btn close-navbar" aria-label="close navigation"><i class="ti-close"></i></button>
                    <ul id="link-list" class="nav navbar-nav menu nav-menu">
                        <li><a href="">Inicio</a></li>
{{--                        <li class="menu-item-has-children menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-14">--}}
{{--                            <a href="#">Pages</a>--}}
{{--                            <ul class="sub-menu">--}}
{{--                                <li><a href="">404</a></li>--}}
{{--                                <li><a href="">About</a></li>--}}
{{--                                <li><a href="">Contact</a></li>--}}
{{--                                <li><a href="">Cart</a></li>--}}
{{--                                <li><a href="">Checkout</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <li class="current-menu-parent menu-item-has-children menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-14">
                            <a href="#">Categorias</a>
                            <ul class="sub-menu" id="list_categories">
{{--                                <li class="current-menu-item"><a href="">Blog</a></li>--}}
{{--                                <li><a href="">Blog Left Sidebar</a></li>--}}
{{--                                <li><a href="">Blog Style 2</a></li>--}}
{{--                                <li><a href="">Blog Style 2 Left Sidebar</a></li>--}}
{{--                                <li><a href="">Blog Masonry</a></li>--}}
{{--                                <li class="menu-item-has-children">--}}
{{--                                    <a href="">Blog Single</a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="">Blog Single</a></li>--}}
{{--                                        <li><a href="">Blog Single Left Sidebar</a></li>--}}
{{--                                        <li><a href="">Blog Single Full Width</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
                            </ul>
                        </li>
                        <li class="current-menu-parent menu-item-has-children menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-14">
                            <a href="#">Autores</a>
                            <ul class="sub-menu" id="list_autors"></ul>
                        </li>
{{--                        <li class="menu-item-has-children menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-14">--}}
{{--                            <a href="#">Shop</a>--}}
{{--                            <ul class="sub-menu">--}}
{{--                                <li><a href="">Shop</a></li>--}}
{{--                                <li><a href="">Shop single</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <li><a href="">Contactenos</a></li>
                    </ul>
                </div>
            </div><!-- end of container -->
        </nav>
    </header>
    <!-- end of header -->

    @yield('content')

    <!-- start footer-section -->
    <footer class="footer-section">
        <div class="container-1310">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="footer-content">
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                            </ul>
                        </div>
                        <div class="copyright">
                            <img src="{{asset('assets/images/logo.png')}}" alt>
                            <p>&copy; 2022 AAnglo , Todos los derechos reservados</p>
                        </div>
                        <div class="important-links">
                            <ul>
{{--                                <li><a href="">About me</a></li>--}}
                                <li><a href="">Contactanos</a></li>
{{--                                <li><a href="">Advertising</a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container-1310 -->
    </footer>
    <!-- end footer-section -->

</div>
<!-- end of page-wrapper -->



<!-- All JavaScript files
================================================== -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!-- Plugins for this template -->
<script src="{{asset('assets/js/jquery-plugin-collection.js')}}"></script>
<script src="{{asset('assets/js/navigation.js')}}"></script>

<!-- Custom script for this template -->
<script src="{{asset('assets/js/script.js')}}"></script>

{{-- Js custom --}}
<script src="{{asset('js/front/index.js')}}"></script>
@yield('scripts-footer')

</body>
</html>
