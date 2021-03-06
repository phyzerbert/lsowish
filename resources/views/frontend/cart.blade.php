@extends('layouts.frontend.master')

@section('content')
    <!-- Start Page Title Area -->
    {{-- <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Cart</h2>
                <ul>
                    <li>
                        <a href="{{route('index')}}">Home</a>
                    </li>
                    <li>Cart</li>
                </ul>
            </div>
        </div>
    </div> --}}
    <!-- End Page Title Area -->
    <!-- Start Cart Area -->
    <section class="cart-area ptb-100 pt-5" id="page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <form>
                        <div class="cart-wraps">
                            @if (!is_Mobile())
                                <div class="cart-table table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">{{__('page.product')}}</th>
                                                <th scope="col">{{__('page.name')}}</th>
                                                <th scope="col">{{__('page.price')}}</th>
                                                <th scope="col">{{__('page.quantity')}}</th>
                                                <th scope="col">{{__('page.total')}}</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr v-for="(item, index) of cart">
                                                <td class="product-thumbnail">
                                                    <a href="javascript:;">
                                                        <img :src="item.product.image" alt="Image">
                                                    </a>
                                                </td>

                                                <td class="product-name">
                                                    <a href="javascript:;">@{{item.product.name}}</a>
                                                </td>

                                                <td class="product-price">
                                                    <span class="unit-amount">RM @{{item.product.price}}</span>
                                                </td>

                                                <td class="product-quantity">
                                                    <div class="input-counter">
                                                        <span class="minus-btn" @click="decrease(index)">
                                                            <i class='bx bx-minus'></i>
                                                        </span>
                                                        <input type="text" v-model="item.quantity">
                                                        <span class="plus-btn" @click="increase(index)">
                                                            <i class='bx bx-plus'></i>
                                                        </span>
                                                    </div>
                                                </td>

                                                <td class="product-subtotal">
                                                    <span class="subtotal-amount">@{{sub_total(item)}}</span>

                                                    <a href="javascript:;" class="remove" @click="removeProduct(index)">
                                                        <i class='bx bx-trash'></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="cart-mobile">
                                    <h3 class="text-center">{{__('page.product_list')}}</h3>
                                    <div class="row" v-for="(item, index) of cart">
                                        <div class="col-12 mt-3">
                                            <img :src="item.product.image" width="60" alt="Image">
                                            <span class="product-name">@{{item.product.name}}</span>
                                        </div>
                                        <div class="col-12">
                                            <span class="unit-amount">RM @{{item.product.price}}</span>
                                            <div class="input-counter ml-3">
                                                <span class="minus-btn" @click="decrease(index)">
                                                    <i class='bx bx-minus'></i>
                                                </span>
                                                <input type="text" v-model="item.quantity">
                                                <span class="plus-btn" @click="increase(index)">
                                                    <i class='bx bx-plus'></i>
                                                </span>
                                            </div>
                                            <span class="subtotal-amount ml-4">@{{sub_total(item)}}</span>
                                            <a href="javascript:;" class="remove float-right" style="margin-top: 5px" @click="removeProduct(index)">
                                                <i class='bx bx-trash'></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="cart-total mt-3 text-right font-weight-bold">
                                Total <span class="ml-3" style="font-size: 20px"><b>RM <span>@{{get_total}}</span></b></span>
                            </div>

                            <div class="cart-buttons">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-sm-7 col-md-7">
                                        <div class="continue-shopping-box">
                                            @if (!is_Mobile())
                                                <a href="{{route('index')}}" class="default-btn page-btn">
                                                    {{__('page.continue_shopping')}}
                                                </a>
                                            @else
                                                <a href="javascript:;" class=" default-btn page-btn" @click="saveCart()">
                                                    {{__('page.proceed_to_checkout')}}
                                                </a>
                                            @endif
                                        </div>

                                    </div>

                                    <div class="col-lg-5 col-sm-5 col-md-5 text-right">
                                        @if (!is_Mobile())
                                            <a href="javascript:;" class=" default-btn page-btn" @click="saveCart()">
                                                {{__('page.proceed_to_checkout')}}
                                            </a>
                                        @else
                                            <a href="{{route('index')}}" class="default-btn page-btn">
                                                {{__('page.continue_shopping')}}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cart Area -->
@endsection

@section('script')
    <script src="{{ asset('plugins/vuejs/vue.min.js') }}"></script>
    <script src="{{ asset('plugins/axios/axios.min.js') }}"></script>
    <script src="{{ asset('frontend/js/cart.js') }}"></script>
@endsection
