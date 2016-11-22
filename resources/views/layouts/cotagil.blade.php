<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="br">
<!-- link de icones: http://fontawesome.io/icons/ -->

<head>

  <!-- Basic -->
  <title>{{ config('app.name', 'Home') }}</title>

  <!-- definir a Codificação -->
  <meta charset="utf-8">

  <!-- Tag Meta Responsivo -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Descrição da página e Autor -->
  <meta name="description" content="Cotagil - Responsive HTML5 Template">
  <meta name="author" content="iThemesLab">
@include('partials.modals.style-modal')
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
                <li><a href="#"><i class="fa fa-user"></i> Administrador</a>
                </li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> adm@cotagil.com</a>
                </li>
                <li><a href="#"><i class="fa fa-phone"></i> +55 68 9926 3839</a>
                </li>
              </ul>
              <!-- End Contact Info -->
            </div>
            <div class="col-md-6">
              <!-- Start Social Links -->
              <ul class="social-list">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="facebook.com"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="www.twitter.com"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a class="dribbble itl-tooltip" data-placement="bottom" title="Dribble" href="#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                  <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a class="flickr itl-tooltip" data-placement="bottom" title="Flickr" href="#"><i class="fa fa-flickr"></i></a>
                </li>
                <li>
                  <a class="tumblr itl-tooltip" data-placement="bottom" title="Tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                </li>
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a class="vimeo itl-tooltip" data-placement="bottom" title="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                </li>
                <li>
                  <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a>
                </li>
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
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="{{url('/')}}"><img alt="" src="images/cotagil.png"></a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Stat Search -->
            <div class="search-side">
              <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                </form>
              </div>
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a class="active" href="{{ url('/') }}"><span class="fa fa-home"></span> Home</a>
                
              </li>
              <!-- exclui a guia Pages -->
              <li>
                <a href="#" data-target="#myModal" data-toggle="modal"><i class="fa fa-share" aria-hidden="true"></i> Entre no sistema</a>
      
              </li>
              <li>
                <a href="portfolio-3.html">Portfolio</a>
                <ul class="dropdown">
                  <li><a href="portfolio-2.html">Fornecedor</a></li>
                  <li><a href="portfolio-3.html">Condominio</a></li>
                  <li><a href="portfolio-4.html">Sindico</a></li>
                  <li><a href="single-project.html">Single Project</a></li>
                </ul>
              </li>
              <li><a href="contact.html"><span class="fa fa-exchange"></span> Contatos</a></li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>
        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
                <a class="active" href="{{ url('/') }}"><span class="fa fa-home"></span> Home</a>
                
              </li>
              <!-- exclui a guia Pages -->
              <li>
                <a href="#" data-toggle="modal"><i class="fa fa-share" aria-hidden="true"></i> Entre no sistema</a>
      
              </li>
              <li>
                <a href="portfolio-3.html">Portfolio</a>
                <ul class="dropdown">
                  <li><a href="portfolio-2.html">Fornecedor</a></li>
                  <li><a href="portfolio-3.html">Condominio</a></li>
                  <li><a href="portfolio-4.html">Sindico</a></li>
                  <li><a href="single-project.html">Single Project</a></li>
                </ul>
              </li>
              <li><a href="contact.html"><span class="fa fa-exchange"></span> Contatos</a></li>
            </ul>

        <!-- Mobile Menu End -->
      </div>
      <!-- End Header ( Logo & Naviagtion ) -->
    </header>
    <!-- End Header -->
      @yield('content')

    <!-- Start Footer -->
    <footer>
      <div class="container">
        <div class="row footer-widgets">

          <!-- Start Subscribe & Social Links Widget -->
          <div class="col-md-3">
            <div class="footer-widget mail-subscribe-widget">
              <div class="footer-widget contact-widget">
                <h4>ENTRAR EM CONTATO<span class="head-line"></span></h4>
                <ul>
                  <li><span>Telefone:</span> +55 3221 3996</li>
                  <li><span>Email:</span> adm@cotagil.com</li>
                  <li><span>Website:</span> www.cotagil.com.br</li>
                </ul>
              </div>
            </div>
            <div class="footer-widget social-widget">
              <h4>SIGA-NOS<span class="head-line"></span></h4>
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

            <!-- Modal -->
        <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
          <h4 class="classic-title"><span class="fa fa-users"></span> <strong>cotágil</strong></h4>
        </div>
        <div class="modal-body">
         @include('partials.form-login-test')
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn-system btn-small border-btn pull-left" data-dismiss="modal"><span class="fa fa-times"></span> Cancelar</button>
          <!--<a href="#" class="btn-system btn-small border-btn">Button</a>-->
          <p>Não é um membro? <a href="#">Solicite aqui!</a></p>
          <p>Esqueceu <a href="#">senha?</a></p>
        </div>
      </div>
      
    </div>
  </div>

          <!-- Start Contact Widget -->
          <div class="col-md-3">
            <div class="footer-widget contact-widget">
              <h4><img src="images/foocotagil.png" class="img-responsive" alt="Footer Logo" /></h4>
              <p>Sistema web para gerenciar processo de cotação de preços de produtos exclusivamente para condomínios, o sistema e capaz de atender as necessidades de informações, agilidade na contratação de fornecedor, sem vínculo, para realizar compra de produtos com preços mais acessíveis no mercado para os condôminos.</p>
              <ul>
                <li><span>Telefone:</span> +55 3221 3996</li>
                <li><span>Email:</span> adm@cotagil.com</li>
                <li><span>Website:</span> www.cotagil.com.br</li>
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
              <p>&copy; 2016 Cotágil -  <a href="http://graygrids.com">GrayGrids</a> </p>
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



</body>

</html>