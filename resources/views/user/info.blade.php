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
                        <h1>Quản lý thông tin</h1>
                        <nav class="d-flex align-items-center">
                            <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                            <a href="category.html">Cập nhật thông tin</a>
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
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" required placeholder="Nhập họ và tên" value="{{ $user->name}}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập họ và tên'">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="address" required placeholder="Địa chỉ" value="{{ $user->address}}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Địa chỉ'">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" required placeholder="Nhập địa chỉ Email" value="{{ $user->email}}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập địa chỉ Email'">
                                </div>
                                <div class="form-group">
                                        <input type="text" class="form-control" id="phone" name="phone" required placeholder="Nhập số điện thoại" value="{{ $user->phone}}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập số điện thoại'">
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
