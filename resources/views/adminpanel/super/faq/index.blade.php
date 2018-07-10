@extends('adminpanel.layout.template', ['title_bread'=>'Pengaturan FAQ','child_bread'=>['Pengaturan Kategori'=>'#']])

@section('bread-title')
    Pengaturan FAQ
@endsection

@section('bread-list')    
    <li><strong>Pengaturan FAQ</strong></li>
@endsection

<!-- Main Container -->

@section('content')

    @include('adminpanel.contents.modal')
    
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><span class="text-navy">Daftar FAQ</span></h5>
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
                                        <a class="btn btn-primary btn-md" href="{{ route('super.pengaturan.faq.create') }}">Tambah FAQ</a><br><br>
                                    </div>
                                </div>

                                <div class="row">                        
                                    <div class="col-sm-12">

                                        <table class="table table-striped table-bordered table-hover" id="data-table">
                                            <thead>
                                            <tr>
                                            	<th width="50">No Urut</th>              
                                                <th width="450">Question</th>
                                                <th width="450">Answer</th>
                                                <th>Edit | Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($recFaq as $u)
                                                <tr>
                                                    <td>{{ $u->noUrut }}</td>	
                                                    <td>{{ $u->question }}</td>
                                                    <td>{{ $u->answer }}</td>
                                                    <td><a href="{{ route('super.pengaturan.faq.edit', ['id'=>$u->id])  }}">Edit</a> | <a href="#" data-href="{{ route('super.pengaturan.faq.delete', ['id'=>$u->id]) }}" data-toggle="modal" data-target="#confirm-delete">Delete</a>
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


