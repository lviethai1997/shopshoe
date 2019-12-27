@if(isset($productSuggest))
<section class="related-product-area section_gap_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Sản phẩm cùng danh mục</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                @foreach ($productSuggest as $hot)
                                <div class="single-related-product d-flex">
                                    <a href="{{ route('get.detail.product',[$hot->pro_slug,$hot->id])}}"><img src="{{ pare_url_file($hot->pro_avatar)}}" style="width:90px;height:90px" alt=""></a>
                                    <div class="desc">
                                        <a href="#" class="title">{{ $hot->pro_name}}</a>
                                        <div class="price">
                                            <h6>{{ number_format($hot->pro_price,0,',','.')}}</h6>
                                            <h6 class="l-through">$210.00</h6>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ctg-right">
                        <a href="#" target="_blank">
                            <img class="img-fluid d-block mx-auto" src="{{ asset('assetshome/img/category/c5.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
