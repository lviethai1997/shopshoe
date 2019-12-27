@extends('layouts.app')
    @section('content')
    <style>
    .form-control{
    margin-left: 300px;
    }
    .form-control{
        font-family: 'Times New Roman', Times, serif;
        color: #212529 !important;
        font-size: 16px !important;

    }
    </style>
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
            <div class="container">
                <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                    <div class="col-first">
                        <h1>Lấy lại mật khẩu</h1>
                        <nav class="d-flex align-items-center">
                            <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                            <a href="category.html">Quên mật khẩu</a>
                        </nav>
                    </div>
                </div>
            </div>
        </section><br><br><br>
        <!-- End Banner Area -->

        <!--================Contact Area =================-->
        @if(\Session::has('success'))
        <div class="alert alert-success">
              <strong>Thành công!</strong> {{\Session::get('success')}}
          </div>
        @endif
        @if(\Session::has('error'))
        <div class="alert alert-danger">
              <strong>Thất bại!</strong> {{\Session::get('error')}}
          </div>
        @endif
        <section class="contact_area section_gap_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <form class="row contact_form" action="" method="post" id="contactForm" novalidate="novalidate" >
                            @csrf
                            <div class="col-md-8">
                                <div class="form-group" style="position: relative">
                                    <input type="email" class="form-control" id="name" name="email" required placeholder="Nhập địa chỉ Email" value="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập địa chỉ Email'">
                                    <a style="position: absolute;top: 17%;right: -290px;color: #333;" href="javascript::void(0)"><i class="fa fa-eye"></i></a>
                                    @if($errors->has('password_old'))
                                    <div class="error-text" style="color:red">
                                        {{$errors->first('password_old')}}
                                    </div>
                                @endif
                                </div>
                            </div>




                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" style="right: 250px;" class="primary-btn">Xác nhận</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
        @stop
        @section('script')
            <script>
                $(function(){
                    $(".form-group a").click(function(){
                        let $this = $(this);
                        if($this.hasClass('active'))
                        {
                            $this.parents('.form-group').find('input').attr('type','password')
                            $this.removeClass('active');
                        }else{
                            $this.parents('.form-group').find('input').attr('type','text')
                            $this.addClass('active');
                        }
                    })
                })
            </script>
        @endsection
