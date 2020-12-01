@extends('layouts.frontend.master')

@section('content')
    @php
        $setting = \App\Models\Setting::first();
    @endphp
    <!-- Start Page Title Area -->
    {{-- <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{__('page.billing_details')}}</h2>
                <ul>
                    <li>
                        <a href="{{route('index')}}">{{__('page.home')}}</a>
                    </li>
                    <li>{{__('page.billing_details')}}</li>
                </ul>
            </div>
        </div>
    </div> --}}
    <!-- End Page Title Area -->

    <!-- Start Checkout Area -->
    <section class="checkout-area ptb-100 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="billing-details">
                        <h3 class="title">{{__('page.billing_details')}}</h3>
                        <form method="POST" action="{{route('save_customer')}}" id="form_customer">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>{{__('page.country')}} <span class="required">*</span></label>
                                        @php
                                            $countries = \App\Models\Country::all();
                                        @endphp
                                        <div class="select-box">
                                            <select class="form-control" name="country" id="country_select" required>
                                                @foreach ($countries as $item)
                                                    <option value="{{$item->id}}" data-value="{{$item->phone_code}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>{{__('page.name_as_ic')}} <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="name_as_ic" id="name_as_ic" required />
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>{{__('page.phone_number')}} <span class="required">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="phone_code">+60</span>
                                            </div>
                                            <input type="text" class="form-control" name="phone_number" id="phone_number" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>{{__('page.address')}} <span class="required">*</span></label>
                                        <input type="text" name="address" class="form-control" id="address" required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>{{__('page.postcode')}}</label>
                                        <input type="text" name="postcode" class="form-control" id="postcode" required>
                                    </div>
                                </div>
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-primary btn-lg" style="width: 150px">{{__('page.confirm')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Checkout Area -->
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            var whatsapp = "{{$setting->whatsapp}}";
            var email = "{{$setting->email}}";
            $("#country_select").change(function(){
                let phone_code = $(this). children("option:selected").data('value');
                $("#phone_code").text(phone_code);
            });

            $("#form_customer").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "{{route('save_customer')}}",
                    method: 'POST',
                    dataType: 'json',
                    data: $("#form_customer").serialize(),
                    beforeSend: function() {
                        $("#ajax-loading").fadeIn();
                    },
                    success(response) {
                        if(response.status == 200) {
                            setTimeout(function() {
                                $("#ajax-loading").fadeOut();
                                Swal.fire(`<div class="text-left pt-3" style="font-size: 17px;"><p>Site will be slow due to heavy traffice. Please Try again later.</p><p>Contact or WhatsApp <a href="https://api.whatsapp.com/send?phone=${whatsapp}" target="_blank">${whatsapp}</a></p><p>Email us at <a href="mailto:${email}">${email}</a></p></div>`);
                            }, 15000);
                        } else if (response.status == 400) {
                            if(response.result == 'cart_error') {
                                window.location.href = '/cart';
                            }
                            if(response.result == 'customer_error') {
                                window.location.href = '/input_customer';
                            }
                        } else {
                            window.location.href = '/';
                        }
                    },
                });
            });
        });
    </script>
@endsection

