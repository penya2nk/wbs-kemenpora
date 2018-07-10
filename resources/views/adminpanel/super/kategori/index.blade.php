@extends('adminpanel.layout.template', ['title_bread'=>'Pengaturan Kategori Laporan','child_bread'=>['Pengaturan Kategori'=>'#']])

@section('bread-title')
    Pengaturan Kategori Laporan
@endsection

@section('bread-list')    
    <li><strong>Pengaturan Kategori</strong></li>
@endsection

<!-- Main Container -->

@section('content')

    @include('adminpanel.contents.modal')
    
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><span class="text-navy">Daftar Kategori</span></h5>
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
                                        <a class="btn btn-primary btn-md" href="{{ route('super.pengaturan.kategori.create') }}">Tambah Kategori</a><br><br>
                                    </div>
                                </div>

                                <div class="row">                        
                                    <div class="col-sm-12">

                                        <table class="table table-striped table-bordered table-hover" id="data-table">
                                            <thead>
                                            <tr>              
                                                <th width="500">Kategori</th>
                                                <th width="400">Deskripsi</th>
                                                <th>Edit | Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($recKategoriLaporan as $u)
                                                <tr>
                                                    <td>{{ $u->kategori }}</td>
                                                    <td>{{ $u->deskripsi }}</td>
                                                    <td><a href="{{ route('super.pengaturan.kategori.edit', ['id'=>$u->id])  }}">Edit</a> | <a href="#" data-href="{{ route('super.pengaturan.kategori.delete', ['id'=>$u->id]) }}" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                                                    </td>
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
    </div>
@endsection

@push('ad-js')
<script type="text/javascript">
    $(document).ready(function() {
        $("#data-table").DataTable();
    });
</script>
@endpush


