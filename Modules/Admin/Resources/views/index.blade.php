@extends('admin::layouts.master')

@section('content')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>


    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('admin.name') !!}
    </p>


<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


@stop

@section('script')
    <script>
        // Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Bảng thống kê doanh thu năm nay'
    },
    subtitle: {
        text: 'Click the columns to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total percent market share'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:1f}VNĐ'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:2f}VNĐ</b> of total<br/>'
    },

    series: [
        {
            name: "Browsers",
            colorByPoint: true,
            data: [
                {
                    name: "Doanh thu ngày",
                    y: {{ $moneyDay}},
                    drilldown: "Doanh thu ngày"
                },
                {
                    name: "Doanh thu tháng",
                    y: {{ $moneyMonth}},
                    drilldown: "Doanh thu tháng"
                },
                {
                    name: "Doanh thu năm",
                    y: {{$moneyYear}},
                    drilldown: "Doanh thu năm"
                },
            ]
        }
    ],
});
    </script>
@endsection
