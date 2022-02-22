<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <!-- HTML5 shim and Respond.js') }} for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js') }} doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ asset('/assets/js/html5/html5shiv.min.js') }}"></script>
      <script src="{{ asset('/assets/js/html5/respond.min.js') }}"></script>
    <![endif]-->

    <script src="//cdn.js') }}delivr.net/npm/sweetalert2@11"></script>

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">

</head>
<body>
    {{-- {foreach $flashes as $flash}
        <script>
            Swal.fire({
                title: {$flash->type == 'success' ? 'Úspech!' : 'Chyba!'},
                text: {$flash->message},
                icon: {$flash->type},
                timer: 2000
            });
        </script>
    {/foreach} --}}


    <div id="site-preloader" class="site-preloader">
        <div class="loader-wrap">
            <div class="ring">
                <span></span>
            </div>
            <h2>AVESídlo</h2>
        </div>
    </div>

	@yield('content')

    <script src="{{ asset('/assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/equal-height.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/assets/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('/assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('/assets/js/count-to.js') }}"></script>
    <script src="{{ asset('/assets/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('/assets/js/progresscircle.js') }}"></script>
    <script src="{{ asset('/assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('/assets/js/main.js') }}"></script>

</body>
</html>
