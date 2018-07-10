@extends('adminpanel.layout.template', ['title_bread'=>'Pengaturan Kategori Laporan','child_bread'=>['Pengaturan Kategori'=>'#']])

@section('bread-title')
    Pengaturan Kategori Laporan
@endsection

@section('bread-list')    
    <li><a href="{{ route('super.pengaturan.kategori') }}">Pengaturan Kategori</a></li>
    <li><strong>Edit Kategori</strong></li>
@endsection

<!-- Main Container -->
@section('content')

    @include('adminpanel.contents.modal')
    
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><span class="text-navy">Form Edit Kategori</span></h5>
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
                                    <a class="btn btn-primary btn-md" href="{{ route('super.pengaturan.kategori') }}">Kembali</a><br><br>
                                </div>
                            </div>                                

                                <div class="row text-center">  

                                    <div class="row">

                                        <div class="col-sm-12">

                                            <p>Silahkan ubah data kategori pada form dibawah ini.
                                            <i>Field dengan <span class="themeFontColor">icon merah</span> harus diisi.</i></p><br>

                                        </div>

                                    </div>

                                    <div class="col-sm-2"></div>

                                    <div class="col-sm-8 col-sm-12">


                                        {!! Form::model($recKategoriLaporanByID,['method'=>'PATCH', 'action'=> ['Admin\Super\Kategori\KategoriLaporanController@update', 'id'=>$recKategoriLaporanByID->id]]) !!}

                                            <div class="form-group text-center">
											    <div class="col-12">
											    	<div class="row">
													    <div class="col-sm-12">
													        <div class="form-group ">
													            <div class="input-group">
													                <span class="input-group-addon text-danger"><span class="fa fa-pencil"></span></span>
													                {!! Form::text('kategori',null,['class'=>'form-control','placeholder'=>'Kategori']) !!}
													            </div>
													        </div>
													    </div>
													</div>

													@include('errors.each',['field'=>'kategori'])

													<div class="row">
													    <div class="col-sm-12">
													        <div class="form-group ">
													            <div class="input-group">
													                <span class="input-group-addon themeFontColor2"><span class="glyphicon glyphicon-bookmark"></span></span>
													                {!! Form::textarea('deskripsi',null,['class'=>'form-control','placeholder'=>'Deskripsi']) !!}

													            </div>
													        </div>
													    </div>
													</div>

													@include('errors.each',['field'=>'deskripsi'])
											        <br>
											        <button type="submit" class="btn btn-primary">
											            Simpan Perubahan
											        </button>
											        <br>
											        <br>
											    </div>
											</div>

                                        {!! Form::close() !!}
                                        

                                    </div>

                                    <div class="col-sm-2"></div>

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
        $("#data-user").DataTable({
            "columnDefs": [
                { "orderable": false, "targets": 7 }
            ]
        });

    });
</script>
@endpush


