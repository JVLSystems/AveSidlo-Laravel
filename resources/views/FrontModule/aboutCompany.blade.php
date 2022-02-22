@extends('FrontModule.master')

@section('content')
    <div class="breadcrumb-area bg-gradient text-center">
        <!-- Fixed BG -->
        <div class="fixed-bg abount-company-banner"></div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Naša spoločnosť</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Úvod</a></li>
                        <li class="active">Naša spoločnosť</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="about-area default-padding">
        <div class="container">
            <div class="about-items">
                <div class="row">
                    <div class="col-lg-12 info wow fadeInLeft">
                        <h5>Naša spoločnosť</h5>
                        <h2>Robíme to inak</h2>
                        <p>
                            Vytvorenie virtuálneho sídla cez internet tak, ako jednoduché je dnes zriadenie účtu na sociálnych sieťach.
                        </p>
                        <p>
                            Vďaka inovatívnemu konceptu s plne automatizovanými procesmi može portál avesídlo.sk ponúknuť aj najnižšie ceny na trhu pri zaručení najvyššieho štandardu kvality a prístupu.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
