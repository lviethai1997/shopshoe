@extends('admin::layouts.master')
@section('content')
<h1 class="h3 mb-2 text-gray-800">Quản lý đánh giá</h1>
<a href="{{ route('admin.get.create.category')}}" class="btn btn-success btn-icon-split">
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
                      <th>Sản phẩm</th>
                      <th>Họ và tên</th>
                      <th>Đánh giá</th>
                      <th>Nội dung</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Họ và tên</th>
                        <th>Đánh giá</th>
                        <th>Nội dung</th>
                        <th>Thao tác</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @if( isset($ratings))
                        @foreach ($ratings as $rating)
                        <tr>
                            <td>{{ isset($rating->product->pro_name) ? $rating->product->pro_name :'[N\A]'}}</td>
                            <td>{{ isset($rating->user->name) ? $rating->user->name :'[N\A]'}}</td>
                            <td>{{ $rating->ra_content }}</td>
                            <td>{{ $rating->ra_number}}</td>

                            <td>

                                <a href="{{ route('admin.get.action.rating',['delete',$rating->id])}}" onclick="return confirm('Are you sure you want to Remove?');">Xóa</a>
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
