@extends('adminpanel.layout.template')

@section('bread-title')
    User Management
@endsection

@section('bread-list')
    <li><a href="{{ route('super.user') }}">User Management</a></li>    
    <li><strong>Add User</strong></li>
@endsection

@section('content')

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><span class="text-navy">Tambah User Baru</span></h5>
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
                                        <a class="btn btn-primary btn-md" href="{{ route('super.user') }}">Kembali</a><br><br>
                                    </div>
                                </div>                                

                                    <div class="row text-center">  

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <p>Silahkan isi data diri user dibawah.
                                                <i>Field dengan <span class="themeFontColor">icon merah</span> harus diisi.</i></p><br>

                                            </div>

                                        </div>

                                        <div class="col-sm-2"></div>

                                        <div class="col-sm-8 col-sm-12">


                                            {!! Form::open(['method'=>'POST', 'action'=>'Admin\Super\User\DataController@create']) !!}

                                            @include('adminpanel.super.user.field',['buttonText'=>'Simpan Data','mode'=>'add'])

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