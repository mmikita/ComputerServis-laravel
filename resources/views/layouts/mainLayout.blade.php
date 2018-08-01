<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <title>PC Start - Serwis komputerowy</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bootstrap/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/animate.css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/socicon/css/socicon.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/multip/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/multip-slider/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/multip-gallery/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/multip/css/mbr-additional.css')}}" type="text/css">


</head>
<body>

<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--transparent mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-74">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--m mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href=#"><img class="mbr-navbar__brand-img mbr-brand__img" src="assets/images/logo.png" alt="Comp service"></a></span>
                        <span class="mbr-brand__name"><a class="mbr-brand__name text-another" href="#">Serwis komputerowy</a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>

                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column">
                            <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active">
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-another" href="#features1-75">Strona główna</a></li>
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-another" href="#features1-75">O nas</a></li>
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-another" href="#msg-box3-81">Artykuły</a></li>
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-another" href="#pricing-table1-86">Cennik</a></li>
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-another" href="#testimonials1-88">Zgłoś usterkę</a></li>
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-another" href="#form1-89">Kontakt</a></li>
                            </ul></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


 @yield('content') 

   
<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-91" style="background-color: rgb(68, 68, 68);">

    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright"></p><p>Copyright &copy 2018 <a href="https://gridgum.com/themes/category/computer-repair/" target="_blank">Computer Repair Templates</a></p><p></p>
            </div>
        </div>
    </div>
</footer>

</section>
  <script src="{{asset('assets/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="{{asset('assets/smooth-scroll/SmoothScroll.js')}}"></script>
  <script src="{{asset('assets/jarallax/jarallax.js')}}"></script>
  <script src="{{asset('assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js')}}"></script>
  <script src="{{asset('assets/masonry/masonry.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/social-likes/social-likes.js')}}"></script>
  <script src="{{asset('assets/multip/js/script.js')}}"></script>
  <script src="{{asset('assets/multip-gallery/script.js')}}"></script>

  
  
</body>
</html>
