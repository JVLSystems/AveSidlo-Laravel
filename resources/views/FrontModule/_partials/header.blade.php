<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Virtuálne sídlo budúcnosti">

    <title>AVESídlo.sk | Virtuálne sídlo budúcnosti</title>

    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/responsive.css') }}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ asset('/assets/js/html5/html5shiv.min.js') }}"></script>
      <script src="{{ asset('/assets/js/html5/respond.min.js') }}"></script>
    <![endif]-->

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">

</head>
<body>

    <div id="site-preloader" class="site-preloader">
        <div class="loader-wrap">
            <div class="ring">
                <span></span>
            </div>
            <h2>AVESídlo</h2>
        </div>
    </div>

    <div class="top-bar-area bg-dark text-light">
        <div class="container">
            <div class="row align-center client-mobile-row">
                <div class="col-lg-7 address-info">
                    <div class="info box">
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i> <a class="classic-anchor" target="_blank" href="https://goo.gl/maps/6yvSY3jv97AEyoKaA">Dolné Pažitie 91/85, 911 01 Trenčín</a>
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i> <a class="classic-anchor" href="mailto:info@avesidlo.sk">info@avesidlo.sk</a>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i> <a class="classic-anchor" href="tel:+421944868214">+421 948 888 888</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12 col-xs-12 text-right button client-mobile-button">
                    <div class="item-flex">
                        <a class="button" href="{{ route('client') }}"><i class="fas fa-users"></i> Klientská zóna</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header id="home">
        <nav class="navbar navbar-default navbar-sticky dark attr-border bootsnav">

            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('/assets/img/logo.png') }}" class="logo" alt="Logo">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li>
                            <a class="{{ request()->segment(1) == '' ? 'active' : '' }}" href="{{ route('home') }}">Úvod</a>
                        </li>
                        <li>
                            <a class="{{ request()->segment(1) == 'nasa-spolocnost' ? 'active' : '' }}" href="{{ route('about.company') }}">Naša spoločnosť</a>
                        </li>
                        <li>
                            <a class="{{ request()->segment(1) == 'sluzby' ? 'active' : '' }}" href="{{ route('services') }}">Služby</a>
                        </li>
                        <li>
                            <a href="{{ route('home') . '#pricelist' }}">Cenník</a>
                        </li>
                        <li>
                            <a class="{{ request()->segment(1) == 'kontakt' ? 'active' : '' }}" href="{{ route('contact') }}">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
