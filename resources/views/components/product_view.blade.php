 <div >
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
                        @if(isset($products))
                        @foreach($products as $hot)
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
            </div>
