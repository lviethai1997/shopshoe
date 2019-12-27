
    @extends('layouts.app')
    @section('content')
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Cart</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <form action="" method="POST">
                     @csrf
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Tổng</th>
                                <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $key => $product)
                            <tr>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img width="100px" height="100px" src="{{ pare_url_file($product->options->avatar)}}" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>{{ $product->name}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                    <h5>{{ number_format($product->price,0,',','.')}}đ</h5>
                                    </td>
                                    <td>
                                        <div class="product_count">
                                        <input type="number" name="qty" id="sst" maxlength="12" value="{{ $product->qty}}" title="Quantity:"
                                                class="input-text qty">

                                        </div>
                                    </td>
                                    <td>
                                        <h5>{{ number_format($product->price * $product->qty,0,',','.')}}đ</h5>
                                    </td>
                                    <td>
                                        <a href="{{ route('delete.shopping.cart',$key)}}">Xóa</a>
                                        <a href="">Cập nhật</a>
                                    </td>
                                </tr>
                            @endforeach


                            <tr>
                                <td></td>

                                <td>

                                </td>
                                <td>
                                        <h5>Tổng đơn hàng</h5>
                                    </td>
                                    <td>
                                        <h5>{{ Cart::subtotal()}}đ</h5>
                                    </td>
                                <td>

                                </td>

                            </tr>
                            <tr class="out_button_area">
                                <td></td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="#">Continue Shopping</a>
                                        <a class="primary-btn" href="{{ Route('get.form.pay')}}">Proceed to checkout</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                </div>
            </div>
        </div>
    </section>
    @stop


