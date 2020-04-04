<!-- Start Heder Area -->
@php
    $setting = \App\Models\Setting::first();
    $locale = session()->get('locale');
    $cart = session('cart') ?? [];
@endphp
<header class="header-area">
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <ul class="header-content-left">
                        {{-- <li>
                            <a href="javascript:;">
                                <i class="bx bx-user"></i> My Account
                            </a>
                        </li> --}}
                        <li>
                            <a href="https://api.whatsapp.com/send?phone={{$setting->whatsapp}}" target="_blank">
                                <i class='bx bxl-whatsapp'></i> {{$setting->whatsapp}}
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
            <div class="mobile-nav" style="height: 72px; background:#017dee; box-shadow: 0 8px 6px -6px rgba(0, 0, 0, 0.4);">
                <a href="{{route('index')}}" class="logo">
                    <img src="{{asset('frontend/img/demo-watch/logo.png')}}" alt="Logo">
                </a>
                <div class="others-option" style="z-index: 100; top: 9px; right: 20px;">
                    <div class="flag-wrap">
                        <ul>
                            <li class="flag-item-top">
                                <a href="javascript:;" class="flag-bar">
                                    @switch($locale)
                                        @case('en')
                                            <img src="{{asset('images/flag/en.png')}}" alt="English"><span>English</span>
                                            @break
                                        @case('zh')
                                            <img src="{{asset('images/flag/zh.png')}}" alt="简体中文"><span>简体中文</span>
                                            @break
                                        @default
                                            <img src="{{asset('images/flag/en.png')}}" alt="English"><span>English</span>
                                    @endswitch
                                </a>
                                <ul class="flag-item-bottom" style="max-width : 140px;">
                                    <li class="flag-item">
                                        <a href="{{route('lang', 'en')}}" class="flag-link">
                                            <img src="{{asset('images/flag/en.png')}}" alt="English"> English
                                        </a>
                                    </li>
                                    <li class="flag-item">
                                        <a href="{{route('lang', 'zh')}}" class="flag-link">
                                            <img src="{{asset('images/flag/zh.png')}}" alt="简体中文"> 简体中文
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="cart-wrap">
                        <a class="cart-icon" href="{{route('cart')}}">
                            <i class='bx bx-cart-alt'></i>
                            <span id="cart_count" class="cart_count">{{count($cart)}}</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="{{route('index')}}">
                            <img src="{{asset('frontend/img/demo-watch/logo.png')}}" alt="Logo">
                        </a>
                        {{-- <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent"> --}}
                            <div class="others-option ml-auto">
                                <div class="flag-wrap">
                                    <ul>
                                        <li class="flag-item-top">
                                            <a href="javascript:;" class="flag-bar">
                                                @switch($locale)
                                                    @case('en')
                                                        <img src="{{asset('images/flag/en.png')}}" alt="English"><span>English</span>
                                                        @break
                                                    @case('zh')
                                                        <img src="{{asset('images/flag/zh.png')}}" alt="简体中文"><span>简体中文</span>
                                                        @break
                                                    @default
                                                        <img src="{{asset('images/flag/en.png')}}" alt="English"><span>English</span>
                                                @endswitch
                                            </a>
                                            <ul class="flag-item-bottom">
                                                <li class="flag-item">
                                                    <a href="{{route('lang', 'en')}}" class="flag-link">
                                                        <img src="{{asset('images/flag/en.png')}}" alt="English"> English
                                                    </a>
                                                </li>
                                                <li class="flag-item">
                                                    <a href="{{route('lang', 'zh')}}" class="flag-link">
                                                        <img src="{{asset('images/flag/zh.png')}}" alt="简体中文"> 简体中文
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="cart-wrap">
                                    <a class="cart-icon" href="{{route('cart')}}">
                                        <i class='bx bx-cart-alt'></i>
                                        <span id="cart_count" class="cart_count">{{count($cart)}}</span>
                                    </a>
                                </div>
                            </div>
                        {{-- </div> --}}
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Tezno Navbar Area -->
</header>
<!-- End Heder Area -->
