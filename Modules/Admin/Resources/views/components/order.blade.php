<table class="table">
        <thead>
            <tr>
                <th>Hình ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Số lượng mua</th>
            </tr>
        </thead>
        <tbody>
                @if( isset($orders))
                @foreach ($orders as $key => $order)
                <tr>
                    <td>
                        <img src="{{ isset($order->product->pro_avatar) ? pare_url_file($order->product->pro_avatar): '' }}" alt="" class="img img-responsive" style="witdh:80;height:80px">
                    </td>
                    <td>{{ isset($order->product->pro_name) ? $order->product->pro_name : '' }}</td>
                    <td>
                        <ul>
                            <p>Giá: {{ number_format($order->or_price,0,',','.')}}</p>
                            <p>Sale: {{ $order->or_sale}}%</p>
                        </ul>
                    </td>
                    <td>{{ $order->or_qty}}</td>
                  </tr>
                @endforeach
            @endif
        </tbody>
</table>

