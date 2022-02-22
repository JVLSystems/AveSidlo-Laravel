@extends('FrontModule.master')

@section('content')
    <!-- Start Banner
    ============================================= -->
    <div class="banner-area auto-height bg-cover-bottom home-banner">
        <div class="container">
            <div class="double-items">
                <div class="row align-center">
                    <div class="col-lg-6 col-md-6 info">
                        <h2 class="wow fadeInDown" data-wow-duration="1s">My sme <span>virtuálne sídlo</span> v ktorom sa nemusíte viazať
                        </h2>
                        <p class="wow fadeInLeft" data-wow-duration="1.5s">
                            Zabudnite na navyknuté schémy viruálnych sídiel a firemných služieb, AVESídlo je virtuálne sídlo budúcnosti.
                        </p>
                        <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube theme video-play-button relative video-inline">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 thumb width-110 wow fadeInRight" data-wow-duration="1s">
                        <img src="{{ asset('/assets/img/illustration/8.png') }}" alt="Thumb">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Our Benefits
    ============================================= -->
    <div class="benifits-area reverse default-padding">
        <div class="container">
            <div class="row align-center">

                <div class="col-lg-6 thumb wow fadeInLeft">
                    <img src="{{ asset('/assets/img/illustration/44.png') }}" alt="Thumb">
                </div>

                <div class="col-lg-6 info wow fadeInDown">
                    <h5>Prečo si vybrať nás</h5>
                    <h2>Získajte väčšinu automatizáciu a anonymitu <strong>na vašom sídle spoločnosti</strong></h2>
                    <p>
                        Vytvorenie virtuálneho sídla cez internet tak, ako jednoduché je dnes zriadenie účtu na sociálnych sieťach.
                    </p>
                    <p>
                        Vďaka inovatívnemu koceptu s plne automatizovanými procesmi može portál avesídlo.sk ponúknuť aj najnižšie ceny na trhu pri zaručení najvyššieho štandardu kvality a prístupu.
                    </p>
                    <ul>
                        <li>
                            <h5>Bez viazanosti</h5>
                        </li>
                        <li>
                            <h5>Plne automatizované</h5>
                        </li>
                        <li>
                            <h5>Pohodlie</h5>
                        </li>
                        <li>
                            <h5>Kompletný online prehľad</h5>
                        </li>
                    </ul>
                    <a class="btn circle btn-md btn-gradient" href="{{ route('register')}}">Začnite teraz</a>
                </div>

            </div>
        </div>
    </div>
    <!-- End Our Benefits -->

    <!-- Start Services Area
    ============================================= -->
    <div class="services-area default-padding bottom-less">
        <!-- Fixed Shape  -->
        <div class="shape-bottom">
            <img src="{{ asset('/assets/img/shape/12.png') }}" alt="Shape">
        </div>
        <!-- Fixed Shape  -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>Čo ponúkame</h5>
                        <h2>
                            Pozrite sa detailnejšie na našu ponuku
                        </h2>
                        <div class="heading-divider"></div>
                    </div>
                </div>
            </div>
            <div class="services-items text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item wow fadeInUp" data-wow-delay="500ms">
                            <div class="icon">
                                <i class="flaticon-bullhorn"></i>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Virtuálne sídlo</a>
                                </h4>
                                <p class="text-justify">
                                    Zabezpečíme Vám kvalifikované a plne automatizované virtuálne sídlo za bezkonkurčenú cenu.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item wow fadeInUp" data-wow-delay="600ms">
                            <div class="icon">
                                <i class="flaticon-keyword-1"></i>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Súhlas so zriadením sídla</a>
                                </h4>
                                <p class="text-justify">
                                    Po zakúpení služby virtuálne sídlo dostávate od nás súhlas vlastníka nehnuteľnosti.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item wow fadeInUp" data-wow-delay="700ms">
                            <div class="icon">
                                <i class="flaticon-subscription"></i>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Označená poštová schránka</a>
                                </h4>
                                <p class="text-justify">
                                    Na adrese virtuálneho sídla Vašu spoločnosť riadnym spôsobom označíme a zabezpečíme označenú schránku.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item wow fadeInUp" data-wow-delay="500ms">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">E-mailová a SMS notifikácia</a>
                                </h4>
                                <p class="text-justify">
                                    Poskytujeme nepretržitú SMS a E-mailovú notifikáciu. Ktorá Vám príde vždy okamžite po prijatí zásielky na adrese Vašej firmy.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item wow fadeInUp" data-wow-delay="600ms">
                            <div class="icon">
                                <i class="flaticon-marketer"></i>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Skenovanie pošty</a>
                                </h4>
                                <p class="text-justify">
                                    Ak momentálne nemožete prísť a vyzdvihnuť si poštu tak Vám ju vieme naskenovať a poslať na Vami zadaný e-mail.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item wow fadeInUp" data-wow-delay="700ms">
                            <div class="icon">
                                <i class="flaticon-checklist"></i>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Online evidencia pošty</a>
                                </h4>
                                <p class="text-justify">
                                    Naša aplikácia disponuje rôznymi pokročilými funkciami na evidenciu a správu pošty, ktoré nás značným spôsobom odlišujú od konkurencie.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>

    <div class="pricing-area default-padding" id="pricelist">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>Naše ceny</h5>
                        <h2>Pozrite sa na naše ceny a <br> vyberte si svoju voľbu</h2>
                        <div class="heading-divider"></div>
                    </div>
                </div>
            </div>
            <div class="pricing-items text-center">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 single-item">
                            <div class="pricing-item">
                                <ul>
                                    <li class="pricing-header">
                                        <h4>Založenie spoločnosti</h4>
                                    </li>
                                    <li class="price">
                                        <h2>250 &euro; <sub>/ jednorazovo</sub></h2>
                                    </li>
                                    <li class="icon">
                                        <i class="flaticon-start"></i>
                                    </li>
                                    <li>Rýchle vybavenie <i class="fas fa-check-circle"></i></li>
                                    <li>Bezkonkurenčná cena <i class="fas fa-check-circle"></i></li>
                                    <li>Bezstarostné založenie <i class="fas fa-check-circle"></i></li>
                                    <li>Spoločnosť s virtuálnym sídlom <i class="fas fa-check-circle"></i></li>
                                    <li>Online evidencia <i class="fas fa-check-circle"></i></li>
                                    <li>Pokročilá onine aplikácia <i class="fas fa-check-circle"></i></li>
                                    <li class="footer">
                                        <a class="btn circle btn-dark border btn-sm" href="{{ route('register') }}">Založiť teraz</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item">
                            <div class="pricing-item active">
                                <ul>
                                    <li class="pricing-header">
                                        <h4>Virtuálne sídlo <br/> bez viazanosti</h4>
                                    </li>
                                    <li class="price">
                                        <h2>6,99 &euro; <sub>/ mesiac</sub></h2>
                                    </li>
                                    <li class="icon">
                                        <i class="flaticon-quality-badge"></i>
                                    </li>
                                    <li>Súhlas so zriadením sídla <i class="fas fa-check-circle"></i></li>
                                    <li>Označená poštová schránka <i class="fas fa-check-circle"></i></li>
                                    <li>E-mailová a SMS notifikácia  <i class="fas fa-check-circle"></i></li>
                                    <li>Skenovanie pošty obratom<i class="fas fa-check-circle"></i></li>
                                    <li>Preposielanie pošty 1x týždenne <i class="fas fa-check-circle"></i></li>
                                    <li>Online evidencia pošty <i class="fas fa-check-circle"></i></li>
                                    <li>Pokročilá online aplikácia <i class="fas fa-check-circle"></i></li>
                                    <li>Vyzdvihovanie zásielok <i class="fas fa-check-circle"></i></li>
                                    <li class="footer">
                                        <a class="btn circle btn-theme effect btn-sm" href="{{ route('register') }}">Začnite teraz</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-item">
                            <div class="pricing-item">
                                <ul>
                                    <li class="pricing-header">
                                        <h4>Likvidácia spoločnosti</h4>
                                    </li>
                                    <li class="price">
                                        <h2>Po dohode</h2>
                                    </li>
                                    <li class="icon">
                                        <i class="flaticon-value"></i>
                                    </li>
                                    <li>Bezstarostné zlikovanie spoločnosti <i class="fas fa-check-circle"></i></li>
                                    <li>Likvidácia akéhokoľvek dlhu <i class="fas fa-check-circle"></i></li>
                                    <li>Právna podpora <i class="fas fa-check-circle"></i></li>
                                    <li>Archivácia dokumentov <i class="fas fa-check-circle"></i></li>
                                    <li>Jedinečné riešenie <i class="fas fa-check-circle"></i></li>
                                    <li>Osobná konzultácia <i class="fas fa-check-circle"></i></li>
                                    <li class="footer">
                                        <a class="btn circle btn-dark border btn-sm" href="{{ route('register') }}">Založiť teraz</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
