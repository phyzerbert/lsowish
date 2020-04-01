@extends('layouts.frontend.master')

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Checkout</h2>
            <ul>
                <li>
                    <a href="index.html">
                        Home
                    </a>
                </li>
                <li>Checkout</li>
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
                    <h3 class="title">Direct Bank Transfer</h3>

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

            <div class="col-lg-6 col-md-12">
                <div class="order-details">
                    <div class="order-table table-responsive">
                        <h3 class="title">Your Order</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $cart = session('cart');
                                @endphp
                                @foreach ($cart as $key => $quantity)
                                    @php
                                        $product = \App\Models\Product::find($key);
                                    @endphp
                                    <tr>
                                        <td class="product-name">
                                            <a href="javascript:;">{{$product->name}}</a>
                                        </td>

                                        <td class="product-total">
                                            <span class="subtotal-amount">${{$product->price * $quantity}}</span>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    <div class="payment-box">
                        <a href="javascript:;" class="default-btn" id="btn_place" >Place Order
                            <i class="flaticon-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Checkout Area -->

@endsection

@section('name')
    <script>
        $(document).ready(function () {
            $("#btn_place").click(function(){
                let bank = $("input[name='bank']:checked").val();
                if(!bank) {
                    alert('Please select the payment option.');
                } else if(bank == 'payoneer') {

                } else {
                    let image = $("input[name='bank']:checked").parents('p').find('img').attr('src');
                }
            });
        });
    </script>
@endsection
