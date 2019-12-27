@extends('admin::layouts.master')
@section('content')
<style>
    .rating .active {
        color: yellow
        !important;
    }
</style>
<h1 class="h3 mb-2 text-gray-800">Quản lý sản phẩm</h1>
<a href="{{ route('admin.get.create.product')}}" class="btn btn-success btn-icon-split">
<span class="icon text-white-50">
<i class="fas fa-flag"></i>
</span>
<span class="text">Thêm mới</span>
</a>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Hình ảnh</th>
                      <th>Tên sản phẩm</th>
                      <th>Loại sản phẩm</th>
                      <th>Giá sản phẩm</th>
                      <th>Trạng thái</th>
                      <th>Nổi bật</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Hình ảnh</th>
                      <th>Tên sản phẩm</th>
                      <th>Loại sản phẩm</th>
                      <th>Thông tin chung</th>
                      <th>Trạng thái</th>
                      <th>Nổi bật</th>
                      <th>Thao tác</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @if( isset($products))
                        @foreach ($products as $product)
                        <?php
                            $age =0;

                            if($product->pro_total_rating)
                            {
                                $age =  round($product->pro_total_number / $product->pro_total_rating,2);
                            }
                        ?>
                        <tr>
                            <td>
                                <img src="{{ pare_url_file($product->pro_avatar) }}" alt="" class="img img-responsive" style="witdh:80;height:100px">
                            </td>
                            <td>{{ $product->pro_name }}</td>
                            <td>{{ isset($product->category->c_name)? $product->category->c_name : '[N\A]'}}</td>
                            <td>
                                <ul>
                                    <p>Giá: {{ number_format($product->pro_price,0,',','.')}}đ</p>
                                    <p>Số lượng: {{ $product->pro_number}}</p>
                                    <p>Sale: {{ $product->pro_sale}}%</p>
                                    <p class="rating">Đánh giá:
                                        @for($i= 1;$i<=5; $i++)
                                            <i class="fa fa-star {{ $i <= $age ? 'active' : ''}}" style="color: #999"></i>
                                        @endfor
                                        <span>{{$age}}</span>
                                    </p>
                                </ul>
                            </td>
                            <td><a href="{{ route('admin.get.action.product',['active',$product->id])}}" class="{{ $product->getStatus($product->pro_active)['class']}}">{{ $product->getStatus($product->pro_active)['name']}}</a></td>
                            <td><a href="{{ route('admin.get.action.product',['hot',$product->id])}}" class="{{ $product->getHot($product->pro_hot)['class']}}">{{ $product->getHot($product->c_hot)['name']}}</a></td>
                            <td>
                                <a style="padding: 5px 10px" href="{{ route('admin.get.edit.product',$product->id)}}"><i class="fas fa-pen">Sửa</i></a>
                                <a style="padding: 5px 10px" href="{{ route('admin.get.action.product',['delete',$product->id])}}" onclick="return confirm('Are you sure you want to Remove?');"><i class="fas fa-trash">Xóa</i></a>
                            </td>
                          </tr>
                        @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>

@stop
