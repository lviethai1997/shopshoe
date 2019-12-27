@extends('admin::layouts.master')
@section('content')
<h1 class="h3 mb-2 text-gray-800">Quản lý đơn hàng</h1>
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
                      <th>Mã đơn hàng</th>
                      <th>Tên khách hàng</th>
                      <th>Địa chỉ</th>
                      <th>Số điện thoại</th>
                      <th>Ghi chú</th>
                      <th>Tổng đơn hàng</th>
                      <th>Time</th>
                      <th>Trạng thái</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Tên khách hàng</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Ghi chú</th>
                        <th>Tổng đơn hàng</th>
                        <th>Time</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @if( isset($transactions))
                        @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->id}}</td>
                            <td>{{ $transaction->tr_user_name }}</td>
                            <td>{{ $transaction->tr_address}}</td>
                            <td>{{ $transaction->tr_phone}}</td>
                            <td>{{ $transaction->tr_note}}</td>
                            <td>{{ number_format($transaction->tr_total,0,',','.')}}đ</td>
                            <td>{{ $transaction->created_at->format('d-m-Y')}}</td>
                            <td>
                                @if($transaction->tr_status ==1)
                                 <a href="#">Đã xử lý</a>
                                @else
                                    <a href="#">Xử lý</a>
                                @endif
                            </td>
                            <td>
                                <a data-id="{{ $transaction->id }}" href="{{ route('admin.get.view.order',$transaction->id)}}" class="js_order_item" >Chi tiết</a>
                                <a href="#" onclick="return confirm('Are you sure you want to Remove?');">Xóa</a>
                            </td>
                          </tr>
                        @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
            </div>

          <div class="modal fade" id="myModalOrder" role="dialog">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">

                      <h4 class="modal-title left">Chi tiết đơn hàng mã #<b class="transaction1_id"></b></h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body" id="md_content">

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
                    </div>
                  </div>

                </div>
              </div>
          </div>


@stop

@section('script')
<script>
    $(function(){
        $(".js_order_item").click(function(event){
          event.preventDefault();
          let $this = $(this);
          let url =  $this.attr('href');
          $("#md_content").html('');
          $(".transaction1_id").text('').text($this.attr('data-id'));

          $("#myModalOrder").modal('show');

          $.ajax({
              url: url,
          }).done(function(result){
            if(result)
            {
                  $("#md_content").append(result);
            }
          });
        });
    })
</script>
@endsection

