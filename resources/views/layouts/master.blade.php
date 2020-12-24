<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Grunt &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">


    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">


    <link rel="stylesheet" href="css/style.css">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">



  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap">

      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-md-4">
              <h1 class="my-0 site-logo"><a href="{{route('home')}}">IT.Female<span class="text-primary">.s</span> </a></h1>
            </div>
            <div class="col-6 col-md-8">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">

                    <div class="d-inline-block d-lg-block ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black">
                        <span class="icon-menu h3"></span> <span class="menu-text"><b>Meni</b></span>
                      </a></div>

                <ul class="site-menu main-menu js-clone-nav d-none d-lg-none">
                    <li><a href="{{route('home')}}" class="nav-link">Početna</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('about')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        O nama
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('about')}}">IT.Female.s</a>
                            <a class="dropdown-item" href="{{route('desing')}}">Dizajn</a>
                            <a class="dropdown-item" href="{{route('development')}}">Razvoj</a>
                            <a class="dropdown-item" href="{{route('education')}}">Edukacija</a>
                            <a class="dropdown-item" href="{{route('services')}}">Usluge</a>
                        </div>
                    </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('blog') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Blog
                    </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('history') }}">Historija</a>
                                <a class="dropdown-item" href="{{ route('itsector') }}">IT sektor</a>
                                <a class="dropdown-item" href="{{route('womenit')}}">Žene i IT</a>
                                <a class="dropdown-item" href="{{route('girls')}}">IT girls</a>
                            </div>
                    </li>
                    <li><a href="{{route('portfolio')}}" class="nav-link">Projekti</a></li>
                    <li><a href="{{route('studio')}}" class="nav-link">Galerija</a></li>
                    <li><a href="{{route('contact')}}" class="nav-link">Kontakt</a></li>
                </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- END .site-navbar-wrap -->

    <div class="site-blocks-cover" id="home-section">
      <div class="img-wrap">
        <div class="owl-carousel slide-one-item hero-slider">
          <div class="slide">
            <img src="images/glint_hero_1.jpg" alt="Image">
          </div>
          <div class="slide">
            <img src="images/glint_hero_2.jpg" alt="Image">
          </div>
          <div class="slide">
            <img src="images/glint_hero_3.jpg" alt="Image">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto align-self-center">
            <div class="intro">
              <div class="heading">
                <h1>IT-Female</h1>
              </div>
              <div class="text">
                <p class="sub-text mb-5" ><b>Žene ... IT sektor...Pridružite nam se...</b></p>
                <p><a href="#" target="_blank" class="btn btn-outline-primary btn-md">Dobro došli</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- END .site-blocks-cover -->



        @yield('content')



    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-12">
                <h3 class="footer-heading mb-4">O nama</h3>
                <p>Organizacija bazirana na sistemu prestavljanja i same koordinacije medžu ženama u IT sektoru kako u Bosni i Hercegovin tako i na Balkanu a i šire.</p>
              </div>
            </div>



          </div>
          <div class="col-lg-3 ml-auto">

            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigacija</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="{{ route('home') }}" class="smoothscroll">Naslovna</a></li>
                  <li><a href="{{ route('about') }}" class="smoothscroll">O nama</a></li>
                  <li><a href="{{ route('blog') }}" class="smoothscroll">Blog</a></li>

                </ul>
              </div>

            </div>

          </div>


          <div class="col-lg-4 mb-5 mb-lg-0">

            <div class="mb-5">
              <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
              <p></p>

              <form action="{{route('kreiraj-Subs')}}" method="post" class="form-subscribe">
                @csrf
                <div class="form-group mb-3">
                  <input type="text" class="form-control border-white text-white bg-transparent" placeholder="Upisati puno ime i prezime" aria-label="Enter Email" aria-describedby="button-addon2">
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control border-white text-white bg-transparent" placeholder="Vaš e-mail" aria-label="Enter Email" aria-describedby="button-addon2">
                </div>
                <div class="form-group">
                  <button class="btn btn-primary px-5" type="submit">Subscribe</button>
                </div>
              </form>

            </div>




          </div>

        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="mb-4">
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Sva prava zadržava | Ova stranica napravljena je sa <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://github.com/arjanalivadic" target="_blank" >Archy</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/stickyfill.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/main.js"></script>


  </body>
</html>
