<!doctype html>
<html lang="zxx">

    <head>
        <!-- Title -->
        <title>{{config('app.name')}}</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
        <!-- Owl Theme Default CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
        <!-- Owl Layerslider CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/layerslider.css')}}">
        <!-- Owl Magnific CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/boxicons.min.css')}}">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
        <!-- Comic Sans CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/comic-sans.css')}}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/meanmenu.css')}}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{asset('frontend/img/favicon.png')}}">

        @yield('style')

    </head>

    <body>
        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="lds-ripple">
                <div></div>
                <div></div>
            </div>
        </div>
        <div id="ajax-loading" class="text-center">
            <img class="mx-auto" src="{{asset('images/loader.gif')}}" width="70" alt="" style="margin:45vh auto;">
        </div>
        <!-- End Preloader Area -->

        @include('layouts.frontend.header')

        @yield('content')

        @include('layouts.frontend.footer')

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class='bx bx-chevrons-up'></i>
            <i class='bx bx-chevrons-up'></i>
        </div>
        <!-- End Go Top Area -->

        <!-- Jquery Slim JS -->
        <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
        <!-- Popper JS -->
        <script src="{{asset('frontend/js/popper.min.js')}}"></script>
        <!-- Bootstrap JS -->
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <!-- Meanmenu JS -->
        <script src="{{asset('frontend/js/jquery.meanmenu.js')}}"></script>
        <!-- Wow JS -->
        <script src="{{asset('frontend/js/wow.min.js')}}"></script>
        <!-- Owl Carousel JS -->
        <script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
        <!-- Carousel Thumbs JS -->
        <script src="{{asset('frontend/js/carousel-thumbs.js')}}"></script>
        <!-- Owl Magnific JS -->
        <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Nice Select JS -->
        <script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>
        <!-- Parallax JS -->
        <script src="{{asset('frontend/js/parallax.min.js')}}"></script>
        <!-- Mixitup JS -->
        <script src="{{asset('frontend/js/jquery.mixitup.min.js')}}"></script>
        <!-- Form Ajaxchimp JS -->
        <script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
        <!-- Form Validator JS -->
        <script src="{{asset('frontend/js/form-validator.min.js')}}"></script>
        <!-- Contact JS -->
        <script src="{{asset('frontend/js/contact-form-script.js')}}"></script>
        <!-- Greensock JS -->
        <script src="{{asset('frontend/js/greensock.js')}}"></script>
        <!-- Transitions JS -->
        <script src="{{asset('frontend/js/layerslider.transitions.js')}}"></script>
        <!-- Kreaturamedia JS -->
        <script src="{{asset('frontend/js/layerslider.kreaturamedia.jquery.js')}}"></script>
        <!-- Map JS FILE -->
        <script src="{{asset('frontend/js/map.js')}}"></script>
        <script src="{{asset('plugins/sweet2/sweetalert2.all.min.js')}}"></script>
        <!-- Custom JS -->
        <script src="{{asset('frontend/js/custom.js')}}"></script>

        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>

        <script src="{{asset('frontend/js/page.js')}}"></script>

        @yield('script')
    </body>

</html>
