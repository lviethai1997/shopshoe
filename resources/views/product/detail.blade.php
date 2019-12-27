
    @extends('layouts.app')
    <style>
        .list_start .star_active {
            color: #f28902;
            }
        .pro-rating .active-rating{
            color: #f28902 !important;
        }
    </style>
    @section('content')
    <section class="banner-area organic-breadcrumb"  >
            <div class="container">
                <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                    <div class="col-first">
                        <h1>Product Details Page</h1>
                        <nav class="d-flex align-items-center">
                            <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                            <a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
                            <a href="single-product.html">product-details</a>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Area -->

        <!--================Single Product Area =================-->
        <div class="product_image_area" id="content_product" data-id="{{ $productDetail->id }}">
            <div class="container">
                <div class="row s_product_inner">
                    <div class="col-lg-6">
                        <div class="s_Product_carousel">
                            <div class="single-prd-item">
                                <img class="img-fluid" src="{{ pare_url_file($productDetail->pro_avatar)}}" alt="">
                            </div>
                            <div class="single-prd-item">
                                <img class="img-fluid" src="{{ pare_url_file($productDetail->pro_avatar)}}" alt="">
                            </div>
                            <div class="single-prd-item">
                                <img class="img-fluid" src="{{ pare_url_file($productDetail->pro_avatar)}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="s_product_text">
                            <h3>{{ ($productDetail->pro_name)}}</h3>
                            <h2>{{ ($productDetail->pro_number > 0)  ? number_format($productDetail->pro_price,0,',','.')."đ" : 'Tạm hết hàng' }}</h2>
                            <ul class="list">
                                <li><a class="active" href="#"><span>Category</span> : asd</a></li>
                                <li><a href="#"><span>Availibility</span> : In Stock</a></li>
                            </ul>
                            <p>{{$productDetail->pro_content}}.</p>
                            <div class="product_count">
                                <label for="qty">Quantity:</label>
                                <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                 class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                 class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                            </div>
                            <div class="card_area d-flex align-items-center">
                                <a class="primary-btn" href="#">Add to Cart</a>
                                <a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
                                <a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Single Product Area =================-->

        <!--================Product Description Area =================-->
        <section class="product_description_area"  >
            <div class="container">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                         aria-selected="false">Specification</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                         aria-selected="false">Comments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
                         aria-selected="false">Reviews</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <p>{{ $productDetail->pro_content}} </p>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h5>Width</h5>
                                        </td>
                                        <td>
                                            <h5>128mm</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Height</h5>
                                        </td>
                                        <td>
                                            <h5>508mm</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Depth</h5>
                                        </td>
                                        <td>
                                            <h5>85mm</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Weight</h5>
                                        </td>
                                        <td>
                                            <h5>52gm</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Quality checking</h5>
                                        </td>
                                        <td>
                                            <h5>yes</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Freshness Duration</h5>
                                        </td>
                                        <td>
                                            <h5>03days</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>When packeting</h5>
                                        </td>
                                        <td>
                                            <h5>Without touch of hand</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Each Box contains</h5>
                                        </td>
                                        <td>
                                            <h5>60pcs</h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="comment_list">
                                    <div class="review_item">
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="img/product/review-1.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h4>Blake Ruiz</h4>
                                                <h5>12th Feb, 2018 at 05:56 pm</h5>
                                                <a class="reply_btn" href="#">Reply</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo</p>
                                    </div>
                                    <div class="review_item reply">
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="img/product/review-2.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h4>Blake Ruiz</h4>
                                                <h5>12th Feb, 2018 at 05:56 pm</h5>
                                                <a class="reply_btn" href="#">Reply</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo</p>
                                    </div>
                                    <div class="review_item">
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="img/product/review-3.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h4>Blake Ruiz</h4>
                                                <h5>12th Feb, 2018 at 05:56 pm</h5>
                                                <a class="reply_btn" href="#">Reply</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="review_box">
                                    <h4>Post a comment</h4>
                                    <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Full name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="number" name="number" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-right">
                                            <button type="submit" value="submit" class="btn primary-btn">Submit Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row total_rate">
                                    <div class="col-6">
                                        <div class="box_total">
                                                <?php
                                                $age =0;

                                                if($productDetail->pro_total_rating)
                                                {
                                                    $age =  round($productDetail->pro_total_number / $productDetail->pro_total_rating,2);
                                                }
                                            ?>
                                            <h5>Overall</h5>
                                            <h4>{{$age}}</h4>
                                            <h6>({{$productDetail->pro_total_number}} Reviews)</h6>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <h3>Based on {{$productDetail->pro_total_number}} Reviews</h3>
                                            <ul>
                                                <li class="pro-rating">
                                                        @for($i= 1;$i<=5; $i++)
                                                        <i class="fa fa-star {{ $i <= $age ? 'active-rating' : ''}}" style="color: #999"></i>
                                                    @endfor<span>{{$age}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="review_list">

                                    @if(isset($ratings))
                                   @foreach ($ratings as $rating)
                                   <div class="review_item">
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="{{ asset('assetshome/img/product/review-1.png')}}" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h4>{{ isset($rating->user->name)? $rating->user->name : ''}}</h4>
                                                <span class="pro-rating">
                                                @for($i=1;$i<=5;$i++)
                                                <i class="fa fa-star {{$i<=$rating->ra_number ? 'active-rating' : ''}}" style="color: #999"></i>
                                                @endfor
                                                </span>
                                            </div>
                                        </div>
                                        <p>{{ $rating->ra_content}}</p>
                                    </div>
                                   @endforeach
                                    @endif

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="review_box">
                                    <h4>Add a Review</h4>
                                    <form class="row contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
                                            <div class="col-md-12">
                                            <p>Your Rating:</p>
                                            <ul class="list">
                                                    <li class="list_start ">
                                                    @for($i = 1;$i <=5;$i++)
                                                    <i class="fa fa-star" data-key="{{ $i }}"></i>
                                                    @endfor
                                                    </li>
                                                </ul>
                                                <span class="list_text"></span>
                                                <input type="hidden" value="" class="number_rating">
                                            </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="ra_content" id="ra_content" rows="1" placeholder="Review" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Review'"></textarea></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-right">
                                            <a href="{{ route('post.rating.product',$productDetail)}}" class="js_rating_product" value="submit">Gửi đánh giá</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @stop

    @section('script')
        <script>
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $(function(){
                let listStart = $(".list_start .fa");

                listRatingText = {
                    1 : 'Không thích',
                    2 : 'Tạm được',
                    3 : 'Bình thường',
                    4 : 'Khác tốt',
                    5 : 'Cực tốt',
                }

                listStart.mouseover( function(){
                    let $this = $(this);
                    let number = $this.attr('data-key');
                    listStart.removeClass('star_active')

                    $(".number_rating").val(number);
                    $.each(listStart, function(key,value){
                        if( key +1 <= number)
                        {
                            $(this).addClass('star_active')
                        }
                    });
                    $(".list_text").text('').text(listRatingText[number]).show();
                });

                $(".js_rating_product").click(function(e){
                    event.preventDefault();
                    let content = $("#ra_content").val();
                    let number =  $(".number_rating").val();
                    let url = $(this).attr('href');

                    if( content && number)
                    {
                        $.ajax({
                        url: url,
                        type: 'POST',
                        data:
                        {
                            number : number,
                            r_content : content
                        }
                        }).done(function(result) {
                            if(result.code == 1)
                            {
                                alert("Gửi đánh giá thành công!");
                                location.reload();
                            }
                        });
                    }
                });

                let idProduct = $("#content_product").attr('data-id');
                let products = localStorage.getItem('products');

                if(products == null)
                {
                    arrayProduct = new Array()
                    arrayProduct.push(idProduct)
                    localStorage.setItem('products',JSON.stringify(arrayProduct))
                }else
                {
                    // let products = localStorage.getItem('products');

                    products = $.parseJSON(products);
                    if(products.indexOf(idProduct) == -1)
                    {
                        products.push(idProduct);
                        localStorage.setItem('products',JSON.stringify(products))
                    }

                    console.log(products)
                }
            });
        </script>
    @stop
