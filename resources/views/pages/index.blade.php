@extends('layouts.web')

@section('content')
<div class="container py-5">
    <div class="row mb-4 px-3 align-items-center justify-content-between">
        <h4>Data Nilai</h4>
        <div>
            <a class="btn btn-outline-secondary" href="{{ route('table') }}">Lihat Data dalam Table</a>
            <a class="btn btn-primary" href="{{ route('create') }}">Tambah Data</a>
        </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div id="chartNilai"></div>
      </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    window.onload = function(){
        var grade = {!! json_encode($grade) !!};
        Highcharts.chart('chartNilai', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik Grade Mahasiswa'
            },
            xAxis: {
                categories: {!! json_encode($mahasiswa) !!},
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Nilai'
                }
            },
            tooltip: {
                shared: true,
                useHTML: true,
                formatter: function() {
                    var dataTooltip = '<b>' + this.x + '</b>';
                    var dataPoint = 0;
                    $.each(this.points, function() {
                        var dataPoint = this.point.index
                        dataTooltip += '<br/>' + this.series.name + ' : ' + this.y;
                        dataTooltip += '<br/>Grade : ' + grade[dataPoint];
                    });
                    return dataTooltip;
                },
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                },
                series: {
                    color: '#1070D6'
                }
            },
            series: [{
                name: 'Nilai Total',
                data: {!! json_encode($nilai_total) !!},
            }]
        });
    }
</script>
@endsection
