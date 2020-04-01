<!-- Start Heder Area -->
<header class="header-area">
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <ul class="header-content-left">
                        <li>
                            <a href="javascript:;">
                                <i class="bx bx-user"></i> My Account
                            </a>
                        </li>
                        <li>
                            <a href="tel:(453)-4567-324-008">
                                <i class="bx bx-phone-call"></i> (453) 4567 324 008
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header-content-right">
                        <p>
                            <a href="#">Free 5 Day</a> Shipping On Online Orders 100+
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Tezno Navbar Area -->
    <div class="tezno-nav-style">
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="{{asset('frontend/img/demo-watch/logo.png')}}" alt="Logo">
                </a>
            </div>
            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="{{route('index')}}">
                            <img src="{{asset('frontend/img/demo-watch/logo.png')}}" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">

                            <!-- Start Other Option -->
                            <div class="others-option ml-auto">
                                <div class="flag-wrap">
                                    <ul>
                                        <li class="flag-item-top">
                                            <a href="#" class="flag-bar">
                                                <img src="{{asset('frontend/img/demo-watch/flag/1.png')}}" alt="Image">
                                                <span>United States</span>
                                            </a>
                                            <ul class="flag-item-bottom">
                                                <li class="flag-item">
                                                    <a href="#" class="flag-link">
                                                        <img src="{{asset('frontend/img/demo-watch/flag/2.png')}}" alt="Image"> Canada
                                                    </a>
                                                </li>
                                                <li class="flag-item">
                                                    <a href="#" class="flag-link">
                                                        <img src="{{asset('frontend/img/demo-watch/flag/3.png')}}" alt="Image">
                                                        Australia
                                                    </a>
                                                </li>
                                                <li class="flag-item">
                                                    <a href="#" class="flag-link">
                                                        <img src="{{asset('frontend/img/demo-watch/flag/4.png')}}" alt="Image"> Germany
                                                    </a>
                                                </li>
                                                <li class="flag-item">
                                                    <a href="#" class="flag-link">
                                                        <img src="{{asset('frontend/img/demo-watch/flag/5.png')}}" alt="Image">
                                                        Argentina
                                                    </a>
                                                </li>
                                                <li class="flag-item">
                                                    <a href="#" class="flag-link">
                                                        <img src="{{asset('frontend/img/demo-watch/flag/6.png')}}" alt="Image"> United
                                                        Kingdom
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                @php
                                    $cart = session('cart') ?? [];

                                @endphp
                                <div class="cart-wrap">
                                    <a class="cart-icon" href="{{route('cart')}}">
                                        <i class='bx bx-cart-alt'></i>
                                        <span id="cart_count">{{count($cart)}}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Tezno Navbar Area -->
</header>
<!-- End Heder Area -->
