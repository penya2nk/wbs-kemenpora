@extends('adminpanel.layout.template')

@section('bread-title')
    Laporan Non Member
@endsection

@section('bread-list')
    <li>Laporan Non-Member</li>
@endsection

<!-- Main Container -->

@section('content')

    
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


                                    <div class="row">                        

                                        <div class="col-sm-12">

                                            <table class="table table-striped table-bordered table-hover dataTables-example dataTable dtr-inline" id="data-laporan" width="100%">
                                                <thead>
                                                <tr>                           
                                                    <th>Tanggal</th>
                                                    <th>Deskripsi Singkat</th>
                                                    <th>Deskripsi</th>
                                                    <th>Kategori Laporan</th>                                                    
                                                    <th>Jalur</th>
                                                    <th>Status</th>                                                    
                                                    <th align="center">Lihat</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($laporan as $lap)
                                                    <tr>
                                                        <td>{{ $lap->created_at->format('d F Y') }} - {{ $lap->created_at->format('H:i:s') }}</td>
                                                        <td>{{ $lap->deskripsiSingkat }}</td>
                                                        <td>{{ $lap->deskripsi }}</td>
                                                        <td>{{ $lap->kategori_laporan->kategori }}</td>
                                                        <td>{{ $lap->jalur_laporan->jalur }}</td>
                                                        <td>
                                                            @include('adminpanel.laporan.get-status',['laporan'=>$lap])
                                                        </td>
                                                        <td align="center"><a href="{{ route('laporan.laporan-detail-alt',['id'=>$lap->id]) }}" ><span class="glyphicon glyphicon-search"></a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                             @if($laporan->count() > 0)

                                            <div class="hr-line-dashed"></div>
                                            <br>

                                            <span class="text-navy" style="font-size: 16px;"><b>Download Rekap Laporan : &nbsp;&nbsp;</b></span>

                                            <a href="{{ route('laporan.member.rekap.download') }}" target="_blank" style="background-color: #f3f3f4;padding: 10px; border-radius: 5px;"><span class="glyphicon glyphicon-download-alt"></span>&nbsp;<b>Download Rekap Laporan</b></a>

                                            @endif

                                        </div>

                                    </div>

                            </div>
                            </div>
                            <br>
                            <br>

                        </div>
                    </div>
                </div>
        </div>
    </div>


@endsection

@push('ad-js')
<script type="text/javascript">
    $(document).ready(function() {

        $.fn.dataTable.ext.errMode = 'throw';
        $("#data-laporan").DataTable({
            "order": [[ 0, "desc" ]],
            "columnDefs": [
                { "orderable": false, "targets": 6 }
            ]
        });

    });
</script>
@endpush

