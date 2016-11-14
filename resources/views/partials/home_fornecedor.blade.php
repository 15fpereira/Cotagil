<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

    <!-- Basic -->
    <title>{{ config('app.name', 'Home') }}</title>

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Page Description and Author -->
    <meta name="description" content="Cotagil - Responsive HTML5 Template">
    <meta name="author" content="iThemesLab">

    @include('partials.css-style')

    <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>
<!-- Container -->
<div id="container">
    <!-- Start Header -->
    <div class="hidden-header"></div>
    <header class="clearfix">
        <!-- Start Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Start Contact Info -->
                        <ul class="contact-details">
                            <li><a href="#"><i class="fa fa-map-marker"></i> House-54/A, London, UK</a> </li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i> info@yourcompany.com</a> </li>
                            <li><a href="#"><i class="fa fa-phone"></i> +12 345 678 000</a> </li>
                        </ul>
                        <!-- End Contact Info -->
                    </div>
                    <div class="col-md-6">
                        <!-- Start Social Links -->
                        <ul class="social-list">
                            <li> <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a> </li>
                            <li> <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a> </li>
                            <li> <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a> </li>
                            <li> <a class="dribbble itl-tooltip" data-placement="bottom" title="Dribble" href="#"><i class="fa fa-dribbble"></i></a> </li>
                            <li> <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a> </li>
                            <li> <a class="flickr itl-tooltip" data-placement="bottom" title="Flickr" href="#"><i class="fa fa-flickr"></i></a> </li>
                            <li> <a class="tumblr itl-tooltip" data-placement="bottom" title="Tumblr" href="#"><i class="fa fa-tumblr"></i></a> </li>
                            <li> <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a> </li>
                            <li> <a class="vimeo itl-tooltip" data-placement="bottom" title="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a> </li>
                            <li> <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a> </li>
                        </ul>
                        <!-- End Social Links -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Bar -->
        <!-- Start Header ( Logo & Naviagtion ) -->
        <div class="navbar navbar-default navbar-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Stat Toggle Nav Link For Mobiles -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <i class="fa fa-bars"></i> </button>
                    <!-- End Toggle Nav Link For Mobiles -->
                    <a class="navbar-brand" href="index.html"><img alt="" src="/images/cotagil.png"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Stat Search -->
                    <div class="search-side"> <a class="show-search"><i class="fa fa-search"></i></a>
                        <div class="search-form">
                            <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                                <input type="text" value="" name="s" id="s" placeholder="Search the site..."> </form>
                        </div>
                    </div>
                    <!-- End Search -->
                    <!-- Start Navigation List -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="active" href="{{url('home')}}">Home</a>
                        </li>
                        <li> <a href="#">Serviço</a>
                            <ul class="dropdown">
                                <li><a href="{{url('pedido/cotacao')}}">Cotar produto</a>
                                </li>
                                <li><a href="{{url('/minha-cotacao')}}">Minhas cotações</a>
                            </ul>
                        </li>
                        <li> <a href="#"><i class="fa fa-user"></i> {{Auth::user()->name}}</a>
                            <ul class="dropdown">
                                <li><a href="{{url('/logout')}}">Sair</a></li>
                                <li><a href="#">Perfil</a></li>
                            </ul>
                        </li>

                    </ul>
                    <!-- End Navigation List -->
                </div>
            </div>

            <!-- Mobile Menu Start -->
            <ul class="wpb-mobile-menu">
                <li>
                    <a href="{{'home'}}">Home</a>
                </li>
                <li>
                    <a class="active" href="about.html"><i class="fa fa-cart-plus">teste</i></a>
                </li>
                <li>
                    <a href="#">Cadastro</a>
                    <ul class="dropdown">
                        <li><a href="tabs.html">Produto</a>
                        </li>
                        <li><a href="buttons.html">Categoria do produto</a>
                    </ul>
                </li>
                <li>
                    <a href="portfolio-3.html">Portfolio</a>
                    <ul class="dropdown">
                        <li><a href="portfolio-2.html">2 Columns</a>
                        </li>
                        <li><a href="portfolio-3.html">3 Columns</a>
                        </li>
                        <li><a href="portfolio-4.html">4 Columns</a>
                        </li>
                        <li><a href="single-project.html">Single Project</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="blog.html">Blog</a>
                    <ul class="dropdown">
                        <li><a href="blog.html">Blog - right Sidebar</a>
                        </li>
                        <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a>
                        </li>
                        <li><a href="single-post.html">Blog Single Post</a>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ url('produtos/carrinho') }}"><span>{{ count(Session('carrinho')) }} itens</span><img src="{{ asset('carrinho.jpeg') }}" width="40" height="25" /></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/logout') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <!-- Mobile Menu End -->
        </div>
        <!-- End Header ( Logo & Naviagtion ) -->
    </header>
    <!-- End Header -->

@yield('content')
    <div class="hr5" style="margin-top:25px; margin-bottom:55px;"></div>
    <!-- Start Footer -->
    <footer>
        <div class="container">
            <div class="row footer-widgets">

                <!-- Start Subscribe & Social Links Widget -->
                <div class="col-md-3">
                    <div class="footer-widget mail-subscribe-widget">
                        <h4>Get in touch<span class="head-line"></span></h4>
                        <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
                        <form class="subscribe">
                            <input type="text" placeholder="mail@example.com">
                            <input type="submit" class="btn-system" value="Send">
                        </form>
                    </div>
                    <div class="footer-widget social-widget">
                        <h4>Follow Us<span class="head-line"></span></h4>
                        <ul class="social-icons">
                            <li>
                                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                            <li>
                                <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                            </li>
                            <li>
                                <a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                            </li>
                            <li>
                                <a class="instgram" href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a class="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                            </li>
                            <li>
                                <a class="skype" href="#"><i class="fa fa-skype"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- .col-md-3 -->
                <!-- End Subscribe & Social Links Widget -->


                <!-- Start Twitter Widget -->
                <div class="col-md-3">
                    <div class="footer-widget twitter-widget">
                        <h4>Twitter Feed<span class="head-line"></span></h4>
                        <ul>
                            <li>
                                <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>
                                <span>28 February 2014</span>
                            </li>
                            <li>
                                <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.An Fusce eleifend aliquet nis application.</p>
                                <span>26 February 2014</span>
                            </li>
                            <li>
                                <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>
                                <span>28 February 2014</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- .col-md-3 -->
                <!-- End Twitter Widget -->

                <!-- Start Flickr Widget -->
                <div class="col-md-3">
                    <div class="footer-widget flickr-widget">
                        <h4>Flicker Feed<span class="head-line"></span></h4>
                        <ul class="flickr-list">
                            <li>
                                <a href="/images/flickr-01.jpg" class="lightbox">
                                    <img alt="" src="/images/flickr-01.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="/images/flickr-02.jpg" class="lightbox">
                                    <img alt="" src="/images/flickr-02.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="/images/flickr-03.jpg" class="lightbox">
                                    <img alt="" src="/images/flickr-03.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="/images/flickr-04.jpg" class="lightbox">
                                    <img alt="" src="/images/flickr-04.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="/images/flickr-05.jpg" class="lightbox">
                                    <img alt="" src="/images/flickr-05.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="/images/flickr-06.jpg" class="lightbox">
                                    <img alt="" src="/images/flickr-06.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="/images/flickr-07.jpg" class="lightbox">
                                    <img alt="" src="/images/flickr-07.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="/images/flickr-08.jpg" class="lightbox">
                                    <img alt="" src="/images/flickr-08.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="/images/flickr-09.jpg" class="lightbox">
                                    <img alt="" src="/images/flickr-09.jpg">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- .col-md-3 -->
                <!-- End Flickr Widget -->


                <!-- Start Contact Widget -->
                <div class="col-md-3">
                    <div class="footer-widget contact-widget">
                        <h4><img src="/images/foocotagil.png" class="img-responsive" alt="Footer Logo" /></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                        <ul>
                            <li><span>Phone Number:</span> +01 234 567 890</li>
                            <li><span>Email:</span>{{ Auth::user()->email }}</li>
                            <li><span>Website:</span> www.yourdomain.com</li>
                        </ul>
                    </div>
                </div>
                <!-- .col-md-3 -->
                <!-- End Contact Widget -->


            </div>
            <!-- .row -->

            <!-- Start Copyright -->
            <div class="copyright-section">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; 2014 Margo - All Rights Reserved</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="footer-nav">
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Copyright -->

        </div>
    </footer>
    <!-- End Footer -->

</div>
<!-- End Container -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- Style Switcher -->
@include('partials.styleswicher')
<script type="text/javascript" src="/js/script.js"></script>

</body>

</html>