@extends('admin::layouts.master')
@section('content')
<h1 class="h3 mb-2 text-gray-800">Quản lý thành viên</h1>
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
                      <th>Email</th>
                      <th>Họ và tên</th>
                      <th>Số điện thoại</th>
                      <th>Địa chỉ</th>
                      <th>Kích hoạt</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Email</th>
                        <th>Họ và tên</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Kích hoạt</th>
                        <th>Thao tác</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @if( isset($users))
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->email}}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone}}</td>
                            <td>{{ $user->address}}</td>
                            <td><a href="{{ route('admin.get.action.user',['active',$user->id])}}">{{ $user->getStatus($user->c_active)['name']}}</a></td>
                            <td>
                                {{-- <a href="{{ route('admin.get.edit.user',$user->id)}}">Sửa</a>
                                <a href="{{ route('admin.get.action.user',['delete',$user->id])}}" onclick="return confirm('Are you sure you want to Remove?');">Xóa</a> --}}
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
