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
                        <h5><span class="text-navy">Form Tambah FAQ</span></h5>
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
                                    <a class="btn btn-primary btn-md" href="{{ route('super.pengaturan.faq') }}">Kembali</a><br><br>
                                </div>
                            </div>                                

                                <div class="row text-center">  

                                    <div class="row">

                                        <div class="col-sm-12">

                                            <p>Silahkan tambah data faq pada form dibawah ini.
                                            <i>Field dengan <span class="themeFontColor">icon merah</span> harus diisi.</i></p><br>

                                        </div>

                                    </div>

                                    <div class="col-sm-2"></div>

                                    <div class="col-sm-8 col-sm-12">


                                        {!! Form::open(['method'=>'POST', 'action'=>'Admin\Super\Faq\FaqController@store']) !!}

                                            <div class="form-group text-center">
											    <div class="col-12">
											    	<div class="row">
													    <div class="col-sm-12">
													        <div class="form-group ">
													            <div class="input-group">
													                <span class="input-group-addon text-danger"><span class="fa fa-question"></span></span>
													                {!! Form::textarea('question',null,['class'=>'form-control','placeholder'=>'Question ?','required'=>true]) !!}
													            </div>
													        </div>
													    </div>
													</div>
													@include('errors.each',['field'=>'question'])

													<div class="row">
													    <div class="col-sm-12">
													        <div class="form-group ">
													            <div class="input-group">
													                <span class="input-group-addon text-danger"><span class="fa fa-pencil"></span></span>
													                {!! Form::textarea('answer',null,['class'=>'form-control','placeholder'=>'Answer','required'=>true]) !!}
													            </div>
													        </div>
													    </div>
													</div>
													@include('errors.each',['field'=>'answer'])

													<div class="row">
													    <div class="col-sm-12">
													        <div class="form-group ">
													            <div class="input-group">
													                <span class="input-group-addon text-danger"><span class="fa fa-list-ol"></span></span>
													                <select name="noUrut" class="form-control" required="">
													                	<option value="">:: Pilih No Urut ::</option>
													                	@for ($i = 1; $i <= 50; $i++)
													                		<option value="{{$i}}">{{$i}}</option>
													                	@endfor
													                </select>
													            </div>
													        </div>
													    </div>
													</div>
													@include('errors.each',['field'=>'noUrut'])


											        <br>
											        <button type="submit" class="btn btn-primary">
											            Simpan
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

@endpush