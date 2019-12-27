@extends('admin::layouts.master')
@section('content')
<h1 class="h3 mb-2 text-gray-800">Quản lý danh mục sản phẩm</h1>
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
                      <th>Mã sản phẩm</th>
                      <th>Tên danh mục</th>
                      <th>Tiêu đề</th>
                      <th>Trang chủ</th>
                      <th>Kích hoạt</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Mã sản phẩm</th>
                        <th>Tên danh mục</th>
                        <th>Tiêu đề</th>
                        <th>Trang chủ</th>
                        <th>Kích hoạt</th>
                        <th>Thao tác</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @if( isset($categories))
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id}}</td>
                            <td>{{ $category->c_name }}</td>
                            <td>{{ $category->c_title_seo}}</td>
                            <td><a href="{{ route('admin.get.action.category',['home',$category->id])}}" class="{{ $category->getHome($category->c_home)['class']}}">{{ $category->getHome($category->c_home)['name']}}</a></td>
                            <td><a href="{{ route('admin.get.action.category',['active',$category->id])}}" class="{{ $category->getStatus($category->c_active)['class']}}">{{ $category->getStatus($category->c_active)['name']}}</a></td>
                            <td>
                                <a href="{{ route('admin.get.edit.category',$category->id)}}">Sửa</a>
                                <a href="{{ route('admin.get.action.category',['delete',$category->id])}}" onclick="return confirm('Are you sure you want to Remove?');">Xóa</a>
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
