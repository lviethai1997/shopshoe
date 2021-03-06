

    {{-- @include('components.header') --}}

    @extends('layouts.app')
    @section('content')

<!-- End Header Area -->

	<!-- start banner Area -->
	<section class="banner-area">
            <div class="container">
                <div class="row fullscreen align-items-center justify-content-start">
                    <div class="col-lg-12">
                        <div class="active-banner-slider owl-carousel">
                            <!-- single-slide -->
                            <div class="row single-slide align-items-center d-flex">
                                <div class="col-lg-5 col-md-6">
                                    <div class="banner-content">
                                        <h1>Nike New <br>Collection!</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                        <div class="add-bag d-flex align-items-center">
                                            <a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
                                            <span class="add-text text-uppercase">Add to Bag</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="banner-img">
                                        <img class="img-fluid" src="{{asset('assetshome/img/banner/banner-img.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- single-slide -->
                            <div class="row single-slide">
                                <div class="col-lg-5">
                                    <div class="banner-content">
                                        <h1>Nike New <br>Collection!</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                        <div class="add-bag d-flex align-items-center">
                                            <a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
                                            <span class="add-text text-uppercase">Add to Bag</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="banner-img">
                                        <img class="img-fluid" src="{{asset('assetshome/img/banner/banner-img.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- start features Area -->
        <section class="features-area section_gap">
            <div class="container">
                <div class="row features-inner">
                    <!-- single features -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-features">
                            <div class="f-icon">
                                <img src="{{asset('assetshome/img/features/f-icon1.png')}}" alt="">
                            </div>
                            <h6>Free Delivery</h6>
                            <p>Free Shipping on all order</p>
                        </div>
                    </div>
                    <!-- single features -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-features">
                            <div class="f-icon">
                                <img src="{{ asset('assetshome/img/features/f-icon2.png')}}" alt="">
                            </div>
                            <h6>Return Policy</h6>
                            <p>Free Shipping on all order</p>
                        </div>
                    </div>
                    <!-- single features -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-features">
                            <div class="f-icon">
                                <img src="{{ asset('assetshome/img/features/f-icon3.png')}}" alt="">
                            </div>
                            <h6>24/7 Support</h6>
                            <p>Free Shipping on all order</p>
                        </div>
                    </div>
                    <!-- single features -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-features">
                            <div class="f-icon">
                                <img src="{{ asset('assetshome/img/features/f-icon4.png')}}" alt="">
                            </div>
                            <h6>Secure Payment</h6>
                            <p>Free Shipping on all order</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end features Area -->

        <!-- Start category Area -->
        <section class="category-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <div class="single-deal">
                                    <div class="overlay"></div>
                                    <img class="img-fluid w-100" src="{{ asset('assetshome/img/category/c1.jpg')}}" alt="">
                                    <a href="{{ asset('assetshome/img/category/c1.jpg')}}" class="img-pop-up" target="_blank">
                                        <div class="deal-details">
                                            <h6 class="deal-title">Sneaker for Sports</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-deal">
                                    <div class="overlay"></div>
                                    <img class="img-fluid w-100" src="{{ asset('assetshome/img/category/c2.jpg')}}" alt="">
                                    <a href="{{ asset('assetshome/img/category/c2.jpg')}}" class="img-pop-up" target="_blank">
                                        <div class="deal-details">
                                            <h6 class="deal-title">Sneaker for Sports</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-deal">
                                    <div class="overlay"></div>
                                    <img class="img-fluid w-100" src="{{ asset('assetshome/img/category/c3.jpg')}}" alt="">
                                    <a href="{{ asset('assetshome/img/category/c3.jpg')}}" class="img-pop-up" target="_blank">
                                        <div class="deal-details">
                                            <h6 class="deal-title">Product for Couple</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <div class="single-deal">
                                    <div class="overlay"></div>
                                    <img class="img-fluid w-100" src="{{ asset('assetshome/img/category/c4.jpg')}}" alt="">
                                    <a href="{{ asset('assetshome/img/category/c4.jpg')}}" class="img-pop-up" target="_blank">
                                        <div class="deal-details">
                                            <h6 class="deal-title">Sneaker for Sports</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="{{ asset('assetshome/img/category/c5.jpg')}}" alt="">
                            <a href="{{ asset('assetshome/img/category/c5.jpg')}}" class="img-pop-up" target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Sneaker for Sports</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('components.product_suggest')

        <!-- start product Area -->
        <section class="owl-carousel active-product-area section_gap">
            <!-- single product slide -->
            {{-- <div class="single-product-slider">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <div class="section-title">
                                <h1>Latest Products</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore
                                    magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- single product -->
                        @if(isset($productHot))
                        @foreach($productHot as $hot)
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product"><a href="{{ route('get.detail.product',[$hot->pro_slug,$hot->id])}}">
                                <img class="img-fluid" src="{{ pare_url_file($hot->pro_avatar)}}" alt=""></a>
                                <div class="product-details">
                                    <h6>{{ $hot->pro_name}}</h6>
                                    <div class="price">
                                        <h6>{{ number_format($hot->pro_price,0,',','.')}}</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                    <div class="prd-bottom">

                                    <a href="{{ route('add.shopping.cart',$hot->id)}}" class="social-info">
                                            <span class="ti-bag"></span>
                                            <p class="hover-text">add to bag</p>
                                        </a>
                                        <a href="" class="social-info">
                                            <span class="lnr lnr-heart"></span>
                                            <p class="hover-text">Wishlist</p>
                                        </a>
                                        <a href="" class="social-info">
                                            <span class="lnr lnr-sync"></span>
                                            <p class="hover-text">compare</p>
                                        </a>
                                        <a href="{{ route('get.detail.product',[$hot->pro_slug,$hot->id])}}" class="social-info">
                                            <span class="lnr lnr-move"></span>
                                            <p class="hover-text">view more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div> --}}
            <!-- single product slide -->
            @if(isset($categoriesHome))
            @foreach ($categoriesHome as $categoryHome)
                <div class="single-product-slider">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center">
                                <div class="section-title">
                                    <h1>{{ $categoryHome->c_name }}</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore
                                        magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- single product -->
                            @if(isset($categoryHome->products))
                                @foreach ($categoryHome->products as $product)
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-product">
                                        <a href="{{ route('get.detail.product',[$product->pro_slug,$product->id])}}"><img class="img-fluid" src="{{ pare_url_file($product->pro_avatar) }}" alt=""></a>
                                        <div class="product-details">
                                            <a href="{{ route('get.detail.product',[$product->pro_slug,$product->id])}}"><h6>{{ $product->pro_name }}</h6></a>
                                            <div class="price">
                                                <h6>${{ $product->pro_price}}</h6>
                                                <h6 class="l-through">$210.00</h6>
                                            </div>
                                            <div class="prd-bottom">

                                                <a href="{{ route('add.shopping.cart',$product->id)}}" class="social-info">
                                                    <span class="ti-bag"></span>
                                                    <p class="hover-text">add to bag</p>
                                                </a>
                                                <a href="" class="social-info">
                                                    <span class="lnr lnr-heart"></span>
                                                    <p class="hover-text">Wishlist</p>
                                                </a>
                                                <a href="" class="social-info">
                                                    <span class="lnr lnr-sync"></span>
                                                    <p class="hover-text">compare</p>
                                                </a>
                                                <a href="{{ route('get.detail.product',[$product->pro_slug,$product->id])}}" class="social-info">
                                                    <span class="lnr lnr-move"></span>
                                                    <p class="hover-text">view more</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach
            @endif

        </section>
        <!-- end product Area -->
        {{-- <div id="product_view"></div> --}}
        <!-- Start exclusive deal Area -->
        <section class="exclusive-deal-area">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6 no-padding exclusive-left">
                        <div class="row clock_sec clockdiv" id="clockdiv">
                            <div class="col-lg-12">
                                <h1>Exclusive Hot Deal Ends Soon!</h1>
                                <p>Who are in extremely love with eco friendly system.</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="row clock-wrap">
                                    <div class="col clockinner1 clockinner">
                                        <h1 class="days">150</h1>
                                        <span class="smalltext">Days</span>
                                    </div>
                                    <div class="col clockinner clockinner1">
                                        <h1 class="hours">23</h1>
                                        <span class="smalltext">Hours</span>
                                    </div>
                                    <div class="col clockinner clockinner1">
                                        <h1 class="minutes">47</h1>
                                        <span class="smalltext">Mins</span>
                                    </div>
                                    <div class="col clockinner clockinner1">
                                        <h1 class="seconds">59</h1>
                                        <span class="smalltext">Secs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" class="primary-btn">Shop Now</a>
                    </div>
                    <div class="col-lg-6 no-padding exclusive-right">
                        <div class="active-exclusive-product-slider">
                            <!-- single exclusive carousel -->
                            <div class="single-exclusive-slider">
                                <img class="img-fluid" src="{{ asset('assetshome/img/product/e-p1.png')}}" alt="">
                                <div class="product-details">
                                    <div class="price">
                                        <h6>$150.00</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                    <h4>addidas New Hammer sole
                                        for Sports person</h4>
                                    <div class="add-bag d-flex align-items-center justify-content-center">
                                        <a class="add-btn" href=""><span class="ti-bag"></span></a>
                                        <span class="add-text text-uppercase">Add to Bag</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single exclusive carousel -->
                            <div class="single-exclusive-slider">
                                <img class="img-fluid" src="{{ asset('assetshome/img/product/e-p1.png')}}" alt="">
                                <div class="product-details">
                                    <div class="price">
                                        <h6>$150.00</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                    <h4>addidas New Hammer sole
                                        for Sports person</h4>
                                    <div class="add-bag d-flex align-items-center justify-content-center">
                                        <a class="add-btn" href=""><span class="ti-bag"></span></a>
                                        <span class="add-text text-uppercase">Add to Bag</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End exclusive deal Area -->

        <!-- Start brand Area -->
        <section class="brand-area section_gap">
            <div class="container">
                <div class="row">
                    <a class="col single-img" href="#">
                        <img class="img-fluid d-block mx-auto" src="{{ asset('assetshome/img/brand/1.png')}}" alt="">
                    </a>
                    <a class="col single-img" href="#">
                        <img class="img-fluid d-block mx-auto" src="{{ asset('assetshome/img/brand/2.png')}}" alt="">
                    </a>
                    <a class="col single-img" href="#">
                        <img class="img-fluid d-block mx-auto" src="{{ asset('assetshome/img/brand/3.png')}}" alt="">
                    </a>
                    <a class="col single-img" href="#">
                        <img class="img-fluid d-block mx-auto" src="{{ asset('assetshome/img/brand/4.png')}}" alt="">
                    </a>
                    <a class="col single-img" href="#">
                        <img class="img-fluid d-block mx-auto" src="{{ asset('assetshome/img/brand/5.png')}}" alt="">
                    </a>
                </div>
            </div>
        </section>

    {{-- @section('script')
        <script>

            $(function(){
                $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
                let routeRenderProduct = '{{ route('post.product.view') }}';
                checkRenderProduct = false;
                $(document).on('scroll',function(){
                if($(window).scrollTop() > 150 && checkRenderProduct== false){
                    checkRenderProduct = false;
                    let products = localStorage.getItem('products');
                    products = $.parseJSON(products)
                    if(products.length >0)
                    {
                        $.ajax({
                            url : routeRenderProduct,
                            method: "POST",
                            data : {id:products},
                            success : function(result){
                                $("#product_view").html('').append(result.data)
                                console.log(result)

                            }
                        })
                    }
                }
            })
            })
        </script>
    @endsection --}}
    @stop
	{{-- @include('components.footer') --}}

