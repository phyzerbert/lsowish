@extends('layouts.frontend.master')

@section('content')
<!-- Start Tezno Slider Area -->
    <section class="tezno-slider-area ptb-100">
        <div class="tezno-slider-wrap owl-theme owl-carousel" data-slider-id="1">
            <div class="tezno-slider-item">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="tezno-slider-text one">
                                <span class="offer">45% Off This Month</span>
                                <h1>Bulb Botz 24 Buy <span>It Now</span></h1>
                                <p>Ultra-orem ipsum dolor sit amet, consectetur adipiscing elit, sed do maecenas accumsan
                                    lacus vel facilisis.</p>
                                <div class="slider-btn">
                                    <span class="price">$654.09</span>
                                    <a href="cart.html" class="default-btn">
                                        Add To Cart
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="slider-img">
                                <img src="{{asset('frontend/img/demo-watch/slider/1.png')}}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tezno-slider-item">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="tezno-slider-text two">
                                <span class="offer">35% Off This Month</span>
                                <h1>Ondonil B7 Time <span>Watch</span></h1>
                                <p>Ultra-orem ipsum dolor sit amet, consectetur adipiscing elit, sed do maecenas accumsan
                                    lacus vel facilisis.</p>
                                <div class="slider-btn">
                                    <span class="price">$554.09</span>
                                    <a href="cart.html" class="default-btn">
                                        Add To Cart
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="slider-img">
                                <img src="{{asset('frontend/img/demo-watch/slider/2.png')}}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tezno-slider-item">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="tezno-slider-text three">
                                <span class="offer">49% Off This Month</span>
                                <h1>Hobeli 24/7 Time <span>Counter</span></h1>
                                <p>Ultra-orem ipsum dolor sit amet, consectetur adipiscing elit, sed do maecenas accumsan
                                    lacus vel facilisis.</p>
                                <div class="slider-btn">
                                    <span class="price">$254.09</span>
                                    <a href="cart.html" class="default-btn">
                                        Add To Cart
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="slider-img">
                                <img src="{{asset('frontend/img/demo-watch/slider/3.png')}}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Carousel Thumbs -->
        <div class="owl-thumbs tezno-slider-thumb" data-slider-id="1">
            <div class="owl-thumb-item">
                <span>01</span>
            </div>

            <div class="owl-thumb-item">
                <span>02</span>
            </div>

            <div class="owl-thumb-item">
                <span>03</span>
            </div>
        </div>
        <!-- End Carousel Thumbs -->
        <div class="slider-bottom-shape">
            <img src="{{asset('frontend/img/demo-watch/slider/slider-bottom-shape.png')}}" alt="Image">
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </section>
    <!-- End Tezno SlideArea -->

    <!-- Start Service Area -->
    <section class="service-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service">
                        <i class="flaticon-offer"></i>
                        <h3>Limited Time Offers</h3>
                        <p>Talk to know about the offer</p>
                        <a href="javascript:;">
                            Claim offer
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service">
                        <i class="flaticon-trolley"></i>
                        <h3>24/7 Client Support</h3>
                        <p>Talk to know about the offer</p>
                        <a href="tel:+123 456 789">
                            +123 456 789
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="single-service">
                        <i class="flaticon-bill"></i>
                        <h3>Reasonable Pricing</h3>
                        <p>Talk to know about the offer</p>
                        <a href="javascript:;">

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Area -->

    <!-- Start Discover Products Area -->
    <section class="discover-products-area pb-100">
        <div class="container">
            <div class="section-title watch-section-title">
                <h2>Our Products</h2>
                <p>Exclusive styles only available at the fact</p>
            </div>
            @php
                $products = \App\Models\Product::all();
            @endphp
            <div class="row">
                @foreach ($products as $item)
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-discover-products">
                            <div class="product-img">
                                <div class="product-img-1">
                                    <img src="{{asset($item->image)}}" alt="Image">
                                    <div class="product-img-2" data-toggle="modal" data-target="#product-view-one">
                                        <img src="{{asset($item->image)}}" alt="Image">
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3>{{$item->name}}</h3>
                                <span class="price">${{$item->price}}</span>
                            </div>
                            <div class="purchase-bar">
                                <a href="javascript:;" class="default-btn btn-add-product" data-id="{{$item->id}}">
                                    Add To Cart
                                    <i class="flaticon-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
