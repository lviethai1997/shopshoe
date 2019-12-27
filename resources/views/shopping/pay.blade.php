@extends('layouts.app')
    @section('content')
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">


            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>
                        <form class="row contact_form" action="" method="post" novalidate="novalidate">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="company" name="name" placeholder="Họ và tên" value="{{ get_data_user('web','name') }}">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="company" name="company" placeholder="Địa chỉ Email" value="{{ get_data_user('web','email') }}">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="company" name="phone" placeholder="Số điện thoại" value="{{ get_data_user('web','phone') }}">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="company" name="address" placeholder="Địa chỉ thường chú" value="{{ get_data_user('web','address') }}">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <h3>Shipping Details</h3>
                                </div>
                                <textarea class="form-control" name="note" id="message" rows="1" placeholder="Order Notes"></textarea>
                            </div>

                    </div>
                    <div class="col-lg-4">

                        <div class="order_box">
                                <h2>Your Order</h2>

                                <ul class="list">
                                    <li><a href="#">Product <span>Total</span></a></li>
                                    @foreach ($products as $product)
                                    <li><a href="#">{{ $product->name}} <span class="middle">x {{$product->qty}}</span> <span class="last">{{ number_format($product->price * $product->qty,0,',','.') }}đ</span></a></li>
                                    @endforeach
                                </ul>

                                <ul class="list list_2">
                                    <li><a href="#">Subtotal <span>{{ Cart::subtotal()}}đ</span></a></li>
                                </ul>
                                <div class="payment_item">
                                    <div class="radion_btn">
                                        <input type="radio" id="f-option5" name="selector">
                                        <label for="f-option5">Check payments</label>
                                        <div class="check"></div>
                                    </div>
                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                                        Store Postcode.</p>
                                </div>
                                <div class="payment_item active">
                                    <div class="radion_btn">
                                        <input type="radio" id="f-option6" name="selector">
                                        <label for="f-option6">Paypal </label>
                                        <img src="img/product/card.jpg" alt="">
                                        <div class="check"></div>
                                    </div>
                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                        account.</p>
                                </div>
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option4" name="selector">
                                    <label for="f-option4">I’ve read and accept the </label>
                                    <a href="#">terms & conditions*</a>
                                </div>
                                <button type="submit" class="btn btn-primary">Thanh toan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @stop
