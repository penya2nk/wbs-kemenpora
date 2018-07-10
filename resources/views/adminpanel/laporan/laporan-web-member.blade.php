@extends('adminpanel.layout.template')

@section('bread-title')
    Laporan Member
@endsection

@section('bread-list')
    <li>Laporan Member</li>
@endsection

<!-- Main Container -->
@section('content')

    @inject('gs','rni\Services\LaporanServices')
    @inject('global_service','rni\Services\GlobalServices')
    
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><span class="text-navy">Daftar Laporan</span></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>                                                                                            
                            </div>
                        </div>
                        <div class="ibox-content">
                            
                            <div class="row">
                            <div class="col-sm-12" style="padding-right: 40px;padding-left: 40px;">

                                <br>

                                     @if($laporan->count() > 0)

                                    @include('adminpanel.laporan.laporan-range-filter',['months'=>$global_service->getMonth(),'years'=>$global_service->getYear(),'laporan'=>'web'])     


                                    @else

                                    <div class="row bg-success" style="border-radius: 5px; padding: 30px;" align="center">  
                                    <div class="col-sm-12"><strong>Maaf belum ada data laporan yang masuk.</strong></div>
                                    </div>

                                    <br>
                                    <br>

                                    @endif

                                    

                                <div class="row">                        

                                    <div class="col-sm-12">

                                        <table class="table table-striped table-bordered table-hover dataTables-example dataTable dtr-inline" id="data-laporan" width="100%">
                                            <thead>
                                            <tr>    
                                                <th>created</th>   
                                                <th>filter_date</th>   
                                                <th></th>              
                                                <th>Tanggal</th>
                                                <th>Deskripsi Singkat</th>
                                                <th>Deskripsi</th>
                                                <th>Kategori Laporan</th>                                            
                                                <th align="center">Status</th>
                                                <th align="center">Lihat</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($laporan as $lap)
                                                <tr>
                                                    <td>{{ $lap->created_at }}</td>
                                                    <td>{{ $lap->created_at->format('m/d/Y') }}</td>
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
                                                    <td>
                                                        @include('adminpanel.laporan.get-status',['laporan'=>$lap])
                                                    </td>
                                                    <td align="center"><a href="{{ route('laporan.laporan-detail',['id'=>$lap->id]) }}" ><span class="glyphicon glyphicon-search"></a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        @if($laporan->count() > 0)

                                        @include('adminpanel.laporan.laporan-rekap',['months'=>$global_service->getMonth(),'years'=>$global_service->getYear(),'laporan'=>'web'])

                                        @endif

                                        <br><br>


                                    </div>

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
<script type="text/javascript">

        var col = [2,3,4,5,6];

        $.fn.dataTable.ext.errMode = 'throw';
        var dt = $("#data-laporan").DataTable({
            "order": [[ 0, "desc" ]],
            "columnDefs": [
                { "sortable": false, "targets": 8 },
                { "sortable": false, "targets": 2 },
                { "visible": false, "targets": 0},
                { "visible": false, "targets": 1},
            ],
           
            dom: "<'row'<'col-sm-12'l>>" +
                 "<'row'<'col-sm-6'B><'col-sm-6'f>>" +
                 "<'row'<'col-sm-12'tr>>" +
                 "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [
                {
                    extend : 'copy',
                    exportOptions: {
                        columns: col
                    }
                },
                {
                    extend : 'csv',
                    exportOptions: {
                        columns: col
                    }
                }, 
                {   extend: 'excel',
                    exportOptions: {
                        columns: col
                    }
                }, 
                {   
                    extend:'pdf', 
                    exportOptions: {
                        columns: col
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: col
                    }
                }
                ]
        });


    $('#dateStart .input-group.date').datepicker({            
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                autoclose: false,
                todayHighlight: true,
                format:'mm - yyyy',
            });

    $('#dateEnd .input-group.date').datepicker({
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                autoclose: false,
                todayHighlight: true,
                format:'mm - yyyy',
            });

    $('#dateStartRekap .input-group.date').datepicker({
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                autoclose: false,
                todayHighlight: true,
                format:'mm - yyyy',
            });

    $('#dateEndRekap .input-group.date').datepicker({
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                autoclose: false,
                todayHighlight: true,
                format:'mm - yyyy',
            });


    $.fn.dataTableExt.afnFiltering.push(
        function(oSettings, aData, iDataIndex){
            var dateStart = parseDateValueStart($("#dateStartField").val());
            var dateEnd = parseDateValueEnd($("#dateEndField").val());
            // aData represents the table structure as an array of columns, so the script access the date value 
            // in the first column of the table via aData[0]
            var evalDate= parseDateValue(aData[1]);

            // alert(evalDate + " - "+ dateStart +" - " + dateEnd);
            
            if (evalDate >= dateStart && evalDate < dateEnd) {
                return true;
            }
            else {
                return false;
            }
            
        });

    function parseDateValue(rawDate) {
        var dateArray= rawDate.split("/");
        var parsedDate= dateArray[2] + dateArray[0] + dateArray[1];
        return parseInt(parsedDate);
    }

    function parseDateValueStart(rawDate) {
        var dateArray= rawDate.split(" ");
        var temp1 = parseInt(dateArray[0]);
        var temp2 = parseInt(dateArray[2]);       

        var sp = "";

        if(temp1 < 10){
            sp = "0";
        }

        var parsedDate = temp2.toString() + sp + temp1.toString() + "01";
        return parseInt(parsedDate);
    }

    function parseDateValueEnd(rawDate) {
        var dateArray= rawDate.split(" ");
        var temp1 = 0;
        var temp2 = 0;
        if(parseInt(dateArray[0]) == 12){
            temp1 = 1;
            temp2 = parseInt(dateArray[2])+1;
        }else{
            temp1 = parseInt(dateArray[0])+1;
            temp2 = parseInt(dateArray[2]);
        }
        //parsedDate= dateArray[0] + dateArray[1];
        var sp = "";

        if(temp1 < 10){
            sp = "0";
        }

        var parsedDate = temp2.toString() + sp + temp1.toString() + "01";
        return parseInt(parsedDate);
    }


    $('#dateStart').change( function() { 
        dt.draw(); 

        document.getElementById("dateStartFieldRekap").value = document.getElementById("dateStartField").value;
        document.getElementById("dateEndFieldRekap").value = document.getElementById("dateEndField").value;
    } );
    $('#dateEnd').change( function() {
        dt.draw(); 

        document.getElementById("dateStartFieldRekap").value = document.getElementById("dateStartField").value;
        document.getElementById("dateEndFieldRekap").value = document.getElementById("dateEndField").value;
    } );


    function tampilData(){

        // alert(parseDateValue('12/27/2016'));
        // alert($("#dateStartField").val());
        // alert(parseDateValueStart($("#dateStartField").val()));
        // alert(parseDateValueEnd($("#dateEndField").val()));

        //return;

        dt.draw();

    }

    function resetTampilData(){

        document.getElementById("dateStartField").value = "{{ $global_service->webGetFirst() }}";
        document.getElementById("dateEndField").value = "{{ $global_service->webGetLast() }}";

        dt.draw();

    }


</script>
@endpush
