@extends('pages.layout.container-alt')

@section('main')

    @inject('gs','rni\Services\GlobalServices')

    @if($gs->cekLaporanUser(Auth::user()->id))

        <span class="themeFontColor" style="font-size:20px;"><b>Daftar Laporan</b></span><hr><br>

        

        {{-->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>--}}

        <div class="col-sm-12">
            <div class="row">
                <div class="table-responsive">
                    <div class="col-sm-12">
                        <table class="table table-hover themeLink" id="data-laporan">
                            <thead style="font-size: 13px;">
                            <tr class="themeBack2">
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Tanggal</th>
                                <th>Deskripsi Singkat</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th class="text-center">Status</th>
                                <th>Lihat</th>
                            </tr>
                            </thead>
                            <tbody style="font-size: 14.5px;">
                                                    @foreach($laporan as $lap)
                                                    <tr>
                                                        <td>{{ $lap->created_at }}</td>
                                                        <td>{{ $lap->created_at->format('d F Y') }} - {{ $lap->created_at->format('H:i:s') }}</td>
                                                        <td>{{ $lap->deskripsiSingkat }}</td>
                                                        <td>{{ $lap->deskripsi }}</td>
                                                        <td>{{ $lap->kategori_laporan->kategori }}</td>
                                                        <td align="center">
                                                            @include('adminpanel.laporan.get-status',['laporan'=>$lap])
                                                        </td>
                                                        <td align="center"><a href="{{ $lap->id }}/detail-laporan" ><span class="glyphicon glyphicon-search"></a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    @else

        <span class="themeFontColor" style="font-size:20px;"><b>Tidak ada daftar laporan</b></span><hr>


        <div class="row">

            <div class="col-sm-12">

                <p class="bg-success" style="padding: 10px; border-radius: 5px;">Anda belum mempunyai laporan apapun.</p><br>

            </div>

        </div>

    @endif


@endsection

@push('dt-js')
<script type="text/javascript">
    $.fn.dataTable.ext.errMode = 'throw';
    $(function(){
        var dt = $("#data-laporan").DataTable({
            "order": [[ 0, "desc" ]],
            "columnDefs": [
                { "orderable": false, "targets": 6 }
            ]
        });
        dt.column(0).visible(false);
    });
</script>
@endpush