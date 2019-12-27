@extends('admin::layouts.master')
@section('content')
<h1 class="h3 mb-2 text-gray-800">Cập nhật danh mục sản phẩm</h1>
<div class="col-lg-14">
    <div class="p-5">
        @include('admin::category.form')
    </div>
</div>


@stop
