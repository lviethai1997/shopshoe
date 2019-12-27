@extends('admin::layouts.master')
@section('content')
<div class="col-lg-14">
    <div class="p-5">
        <h1 class="h3 mb-2 text-gray-800">Thêm mới danh mục sản phẩm</h1>
        @include('admin::product.form')
    </div>
</div>


@stop
