@extends('adminpanel.layout.template')

@section('bread-title')
    Dashboard
@endsection

<!-- Main Container -->

@section('content')

    @inject('global_service','rni\Services\GlobalServices')
        
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">                    	

                    @if(Auth::user()->roleId == '2')
                        {{-- <a href="{{ route('laporan.kirim') }}">Kirim Semua Laporan</a> --}}
                        
                    @endif

                        <br><br>
                       

                        <!-- <div class="flot-chart" style="height: 300px;">
                            <div class="flot-chart-content" id="chart1"></div>
                        </div> -->

                        <!-- <div id="info1">Info</div><br> -->

                        <div id="dash-chart1" style="height:300px;width:100%; "></div>                         

                        <div id="dash-chart2-content"></div>                        

                        <div id="dash-chart3" >

                            <br><br><br>

                            <div class="row">                        

                                        <div class="col-sm-12" style="padding-right: 40px;padding-left: 60px;">

                                            <table class="table table-striped table-bordered table-hover dataTables-example dataTable dtr-inline" id="table-chart" width="100%">
                                                <thead>
                                                <tr> 
                                                    <th>Tanggal</th>
                                                    <th></th>
                                                    <th>Tanggal</th>
                                                    <th>Deskripsi Singkat</th>
                                                    <th>Deskripsi</th>
                                                    <th>Kategori Laporan</th> 
                                                    <th>Status Id</th>                                     
                                                    <th>Status</th>
                                                    <th>Lihat</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($laporan as $lap)
                                                    <tr>

                                                        <td>{{ $lap->created_at }}</td>
                                                      
                                                        <td align="center">
                                                            @if($lap->spam=="")
                                                            -
                                                            @else
                                                            <span class="label2 label-danger">
                                                            <strong>SPAM</strong>
                                                            </span>
                                                            @endif
                                                        </td>
                                                        <td>{{ $lap->created_at->format('d F Y') }} - {{ $lap->created_at->format('H:i:s') }}</td>
                                                        <td>{{ $lap->deskripsiSingkat }}</td>
                                                        <td>{{ $lap->deskripsi }}</td>
                                                        <td>{{ $lap->kategori_laporan->kategori }}</td>
                                                        <td>{{ $lap->statusId }}</td>
                                                        <td>
                                                            @include('adminpanel.laporan.get-status',['laporan'=>$lap])
                                                        </td>
                                                        <td align="center"><a href="{{ route('laporan.laporan-detail',['id'=>$lap->id]) }}" ><span class="glyphicon glyphicon-search"></a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                            

                                        </div>

                                    </div>

                        </div>

                        <div id="dash-chart4" >

                            <br><br><br>

                            <div class="row">                        

                                        <div class="col-sm-12" style="padding-right: 40px;padding-left: 60px;">

                                            <table class="table table-striped table-bordered table-hover dataTables-example dataTable dtr-inline" id="table-chart2" width="100%">
                                                <thead>
                                                <tr>    
                                                    <th>Tanggal</th>
                                                    <th></th>                 
                                                    <th>Tanggal</th>
                                                    <th>Deskripsi Singkat</th>
                                                    <th>Deskripsi</th>
                                                    <th>Kategori Laporan</th>    
                                                    <th>Status Id</th>  
                                                    <th>Jalur</th>                                        
                                                    <th>Status</th>
                                                    <th align="center">Lihat</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($laporan2 as $lap)
                                                    <tr>
                                                        <td>{{ $lap->created_at }}</td>                                                        
                                                        <td align="center">
                                                            @if($lap->spam=="")
                                                            -
                                                            @else
                                                            <span class="label2 label-danger">
                                                            <strong>SPAM</strong>
                                                            </span>
                                                            @endif
                                                        </td>
                                                        <td>{{ $lap->created_at->format('d F Y') }} - {{ $lap->created_at->format('H:i:s') }}</td>
                                                        <td>{{ $lap->deskripsiSingkat }}</td>
                                                        <td>{{ $lap->deskripsi }}</td>
                                                        <td>{{ $lap->kategori_laporan->kategori }}</td>
                                                        <td>{{ $lap->statusId }}</td>
                                                        <td>{{ $lap->jalur_laporan->jalur }}</td>
                                                        <td>
                                                            @include('adminpanel.laporan.get-status',['laporan'=>$lap])
                                                        </td>
                                                        <td align="center"><a href="{{ route('laporan.laporan-detail-alt',['id'=>$lap->id]) }}" ><span class="glyphicon glyphicon-search"></a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                            

                                        </div>

                                    </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@push('ad-js')

<script>
$(document).ready(function(){

        //Set DataTable

        $.fn.dataTable.ext.errMode = 'throw';
        var dt1 = $("#table-chart").DataTable({
                        "order": [[ 0, "desc" ]],
                        "columnDefs": [
                            { "sortable": false, "targets": 8 },
                            { "sortable": false, "targets": 1 }
                        ]
                    });
        var dt2 = $("#table-chart2").DataTable({
                        "order": [[ 0, "desc" ]],
                        "columnDefs": [
                            { "sortable": false, "targets": 9 },
                            { "sortable": false, "targets": 1 }
                        ]
                    });
        dt1.column(6).visible(false);
        dt2.column(6).visible(false);
        dt1.column(0).visible(false);
        dt2.column(0).visible(false);
        document.getElementById('dash-chart3').style.display = 'none';
        document.getElementById('dash-chart4').style.display = 'none';

        //

        $.jqplot.config.enablePlugins = true;
        var cnw = parseInt('{{ $global_service->countLaporanNonWeb() }}');
        var cw = parseInt('{{ $global_service->countLaporanWeb() }}');
        var interval = parseInt('{{ $global_service->getInterval() }}');
        // var cnw = 120;
        //var s1 = JSON.parse("[" + '2,5' + "]"); 
        var s1 = [cnw,cw];
        var ticks = ['Non-Online','Online'];    
        //alert(s1);
         
        plot1 = $.jqplot('dash-chart1', [s1], {
            title:'Total Laporan WBS - Berdasarkan Input',
            // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
            animate: !$.jqplot.use_excanvas,
            seriesColors:['#f8ff35', '#27c4a2'],
            seriesDefaults:{
                renderer:$.jqplot.BarRenderer,
                pointLabels: { show: true, location: 'e', edgeTolerance: -15 },
                shadowAngle: 135,
                rendererOptions: {
                    barDirection: 'horizontal',
                    barWidth : 70,
                    varyBarColor: true,
                },
                pointLabels: {show: true, formatString: '%d', fontSize:'10pt'}         
            },  
            axesDefaults:{min:0, tickInterval:interval},
            axes: {
                xaxis: {
                    label:'Jumlah Laporan',
                    labelOptions: {
                        fontSize: '12pt'
                    },                  
                    labelRenderer: $.jqplot.CanvasAxisLabelRenderer,
                    tickRenderer: $.jqplot.CanvasAxisTickRenderer,
                    tickOptions: {                        
                        fontSize: '10pt',    
                    },            
                },
                yaxis: {
                    label:'Tipe Laporan',
                    labelOptions: {
                        fontSize: '12pt'
                    },
                    renderer: $.jqplot.CategoryAxisRenderer,
                    labelRenderer: $.jqplot.CanvasAxisLabelRenderer,
                    tickRenderer: $.jqplot.CanvasAxisTickRenderer,
                    ticks:ticks,
                    tickOptions: {
                        fontSize: '10pt'
                    }
                }
            },
            highlighter: { show: true }
        });
     
        $('#dash-chart1').bind('jqplotDataClick', 
            function (ev, seriesIndex, pointIndex, data) {
                // $('#info1').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data);              
                var j = String(data).slice(-1);
                var k = '{{ $global_service->countWebStatus() }}';
                var p = '{{ $global_service->countNonWebStatus() }}';
                if(j==1){
                    dashChart2(p, j);
                }else{
                    dashChart2(k, j);
                }
                document.getElementById('dash-chart3').style.display = 'none';
                document.getElementById('dash-chart4').style.display = 'none';
            }
        );

        $('#dash-chart1').on('jqplotDataHighlight', function () {
           $('.jqplot-event-canvas').css( 'cursor', 'pointer' );
        });

        $('#dash-chart1').on('jqplotDataUnhighlight', function() {
            $('.jqplot-event-canvas').css('cursor', 'auto');
        });


        //Laporan Status Chart

        function dashChart2(param, param2){
            //alert(param);
            document.getElementById('dash-chart2-content').innerHTML = "<br><div class='hr-line-dashed'></div><br><div id='dash-chart2' style='height:500px;width:100%;'></div>";

            var ticks2 = ['Selesai','Tidak Terbukti', 'Sedang Diproses', 'Diteruskan', 'Menunggu'];

            var s2 = JSON.parse("[" + param + "]");

            var itv = 0;

            for (i = 0; i < s2.length; i++) { 
                if(s2[i] > itv) itv = s2[i];
            }            

            if(itv>=1000000){
                itv = 100000;
            }else if(itv>=100000){
                itv = 10000;
            }else if(itv>=10000){
                itv = 1000;
            }else if(itv>=1000){
                itv = 100;
            }else if(itv>=500){
                itv = 50;
            }else if(itv>=50){
                itv = 10;
            }else if(itv>=20){
                itv = 5;
            }else if(itv>=10){
                itv = 2;
            }else{
                itv = 1;
            }

            //alert(itv);

            var ct = '';

            if(param2==1){ 
                ct = 'Total Laporan (Non-Online) - Berdasarkan Status'; 
            }else{ 
                ct = 'Total Laporan (Online) - Berdasarkan Status'; 
            }

            plot2 = $.jqplot('dash-chart2', [s2], {
                title:ct,
                // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
                animate: !$.jqplot.use_excanvas,
                seriesColors:['#02d6a8', '#ef1f1f', '#0494ed', '#ffbb32', '#cb23ff'],
                seriesDefaults:{
                    renderer:$.jqplot.BarRenderer,
                    pointLabels: { show: true, location: 'e', edgeTolerance: -15 },
                    shadowAngle: 135,
                    rendererOptions: {
                        barDirection: 'horizontal',
                        barWidth : 40,
                        varyBarColor: true,
                    },
                    pointLabels: {show: true, formatString: '%d', fontSize:'10pt'}         
                },  
                axesDefaults:{min:0, tickInterval:itv},
                axes: {
                    xaxis: {
                        label:'Jumlah Laporan',
                        labelOptions: {
                            fontSize: '12pt'
                        },                  
                        labelRenderer: $.jqplot.CanvasAxisLabelRenderer,
                        tickRenderer: $.jqplot.CanvasAxisTickRenderer,
                        tickOptions: {                        
                            fontSize: '10pt',    
                        },            
                    },
                    yaxis: {
                        label:'Status Laporan',
                        labelOptions: {
                            fontSize: '12pt'
                        },
                        renderer: $.jqplot.CategoryAxisRenderer,
                        labelRenderer: $.jqplot.CanvasAxisLabelRenderer,
                        tickRenderer: $.jqplot.CanvasAxisTickRenderer,
                        ticks:ticks2,
                        tickOptions: {
                            fontSize: '10pt'
                        }
                    }
                },
                highlighter: { show: true }
            });

            $('#dash-chart2').bind('jqplotDataClick', 
                function (ev, seriesIndex, pointIndex, data) {

                    var j2 = String(data).slice(-1);
                    // alert(j2);

                    if(j2=='5'){                        

                        dt1.column(6).search("1").draw();
                        dt2.column(6).search("1").draw();
    
                    }else if(j2=='4'){

                        dt1.column(6).search("3").draw();
                        dt2.column(6).search("3").draw();

                    }else if(j2=='3'){

                        dt1.column(6).search("4").draw();
                        dt2.column(6).search("4").draw();
                        
                    }else if(j2=='2'){

                        dt1.column(6).search("5").draw();
                        dt2.column(6).search("5").draw();
                        
                    }else if(j2=='1'){

                        dt1.column(6).search("6").draw();
                        dt2.column(6).search("6").draw();
                        
                    }

                    document.getElementById('dash-chart3').style.display = 'none';
                    document.getElementById('dash-chart4').style.display = 'none';

                    if(param2==2){
                        document.getElementById('dash-chart3').style.display = 'inline';
                    }else{
                        document.getElementById('dash-chart4').style.display = 'inline';
                    }

                }
            );

            $('#dash-chart2').on('jqplotDataHighlight', function () {
               $('.jqplot-event-canvas').css( 'cursor', 'pointer' );
            });

            $('#dash-chart2').on('jqplotDataUnhighlight', function() {
                $('.jqplot-event-canvas').css('cursor', 'auto');
            });
        };


        //Ajax

        

    });
</script>

@endpush

