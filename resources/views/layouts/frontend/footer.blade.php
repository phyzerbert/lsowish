<!-- Start Footer Top Area -->
@php
    $setting = \App\Models\Setting::first();
@endphp
<footer class="footer-top-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-widget">
                    <img src="{{asset('frontend/img/demo-watch/footer-logo.png')}}" alt="Image">
                    <p>{{$setting->footer_text}}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-widget">
                    <h3>{{__('page.stay_in_touch')}}</h3>
                    <ul>
                        {{-- <li>
                            44 Canal Center Plaza #200, Alexandria, VA 22314, USA
                        </li> --}}
                        <li>
                            <a href="https://api.whatsapp.com/send?phone={{$setting->whatsapp}}" target="_blank">
                                <span>WhatsApp:</span> {{$setting->whatsapp}}
                            </a>
                        </li>
                        <li>
                            <a href="mailto:{{$setting->email}}"><span>{{__('page.email')}}:</span> {{$setting->email}}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-widget">
                    <h3>{{__('page.product')}}</h3>
                    @php
                        $products = \App\Models\Product::all();
                    @endphp
                    <ul>
                        @foreach ($products as $item)
                            <li>
                                <a href="javascript:;">
                                    <i class="flaticon-right-arrow"></i> {{$item->name}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-md-6">
                <div class="single-widget">
                    <h3>{{__('page.about_us')}}</h3>
                    <ul>
                        <li>
                            <a href="javascript:;"data-toggle="modal" data-target="#aboutUsModal">
                                <i class="flaticon-right-arrow"></i> {{__('page.about_us')}}
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="modal" data-target="#warrantyModal">
                                <i class="flaticon-right-arrow"></i> {{__('page.warranty')}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </div>
</footer>
<!-- End Footer Top Area -->

<!-- Start Footer Bottom Area -->
<footer class="footer-bottom-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="social-area">
                    <ul>
                        <li>
                            <a href="javascript:;"><i class="bx bxl-facebook"></i></a>
                        </li>
                        <li>
                            <a href="javascript:;"><i class="bx bxl-twitter"></i></a>
                        </li>
                        <li>
                            <a href="javascript:;"><i class="bx bxl-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="javascript:;"><i class="bx bxl-youtube"></i></a>
                        </li>
                        <li>
                            <a href="javascript:;"><i class="bx bxl-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="copy-right">
                    <p>©2020 {{__('page.all_rights_reserved')}}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="payment-method">
                    <ul>
                        <li>
                            <a href="javascript:;" target="blank">
                                <img src="{{asset('frontend/img/demo-watch/payment-card/1.png')}}" alt="Image">
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" target="blank">
                                <img src="{{asset('frontend/img/demo-watch/payment-card/2.png')}}" alt="Image">
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" target="blank">
                                <img src="{{asset('frontend/img/demo-watch/payment-card/3.png')}}" alt="Image">
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" target="blank">
                                <img src="{{asset('frontend/img/demo-watch/payment-card/4.png')}}" alt="Image">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Bottom Area -->

<div class="modal" id="aboutUsModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{__('page.about_us')}}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                {!! $setting->about_us !!}
            </div>
        </div>
    </div>
</div>

<div class="modal" id="warrantyModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{__('page.about_us')}}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                {!! $setting->warranty !!}
            </div>
        </div>
    </div>
</div>
