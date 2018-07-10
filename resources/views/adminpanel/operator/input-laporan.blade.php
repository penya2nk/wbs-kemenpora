@extends('adminpanel.layout.template')

@section('bread-title')
    Input Laporan
@endsection

@section('bread-list')
    <li><strong>Input Laporan</strong></li>
@endsection

<!-- Main Container -->

@section('content')
        
        @inject('global_service','rni\Services\GlobalServices')

        {!! Form::open(['method'=>'POST','action'=>'Admin\Operator\InputLaporanController@create','enctype'=>'multipart/form-data','files'=>'true','multiple'=>'multiple']) !!}

        <input type="hidden" name="statusId" id="statusId" value="1">

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><span class="text-navy">Pembuatan Laporan</span> <small>Harap diisi dengan data selengkap mungkin</small></h5>
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
                                    
                                        <i>Field dengan <span class="themeFontColor">icon merah</span> harus diisi.</i></p><br>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12">

                                        @include('partials.pelaporan.laporan')

                                    </div>
                                </div>

                                @include('partials.pelaporan.jalur')
                                    

                                <div class="hr-line-dashed"></div>

                                <div class="row">

                                    <div class="col-sm-12">

                                        <span class="text-navy" style="font-size:18px;">Informasi data diri pelapor :</span><br><br>

                                    </div>

                                    <div class="col-sm-12">

                                        @include('partials.pelaporan.data-op')                                            

                                    </div>

                                </div>

                                <div class="hr-line-dashed"></div><br>

                                <div class="row">

                                    <div class="col-sm-12">

                                        <span class="text-navy" style="font-size:18px;">Upload bukti-bukti (jika ada) Maksimal 5Mb dengan format JPG/PDF :</span><br><br>

                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input type="file" name="file[]">
                                        </div>
                                    </div>

                                </div>                          

                                <br>  

                                <div class="hr-line-dashed"></div><br>

                                <div class="row">

                                    <div class="col-sm-12">

                                        <span class="text-navy" style="font-size:18px;">Mengenai informasi pribadi pelapor :</span><br><br>

                                    </div>

                                    <div class="col-sm-12">

                                        @include('partials.pelaporan.informasi')
                                        <div style="padding-left: 20px;font-style: italic;font-size: 11px;">
                                            <strong class="themeFontColor">* Jika memilih untuk merahasiakan data diri pelapor, kami tidak akan mempublish data diri pelapor.</strong>
                                        </div>

                                    </div>

                                </div>

                                <br><div class="hr-line-dashed"></div>

                                <div class="row">

                                    <div class="col-sm-12">
                                        <h4>
                                            <input type="checkbox" name="proceed" id="checkbox1">
                                            <label for="checkbox1">
                                                <b>Teruskan Laporan Ke APIP</b>
                                            </label>
                                        </h4>
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="row text-center">

                                    <div class="col-sm-12 text-center">

                                        <br>
                                        <button type="submit" class="btn btn-lg btn-primary">Kirim Laporan</button>
                                        <br> <br> <br>

                                    </div>

                                </div>

                               {{--  <div class="row bg-success" style="border-radius: 5px;">
                                    <div class="col-sm-12">
                                        <br><p>Setelah laporan ini dikirim maka :</p>
                                        <ol>
                                            <li>Kami akan mengirim email konfirmasi secara otomatis jika laporan telah kami terima.</li>
                                            <li>Jika tidak ada tanggapan setelah konfirmasi maka laporan ini akan ditutup secara otomatis.</li>
                                        </ol>
                                        <br>
                                    </div>
                                </div> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><span class="text-navy">Pertanyaan Mengenai Laporan</span></h5>
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

                                            <span class="text-navy" style="font-size:18px;">Pertanyaan :</span><br><br>

                                        </div>

                                        <div class="col-sm-12">

                                            @include('partials.pelaporan.laporan-extension-alt')

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

        

        {!! Form::close() !!}                        


@endsection

@push('ad-js')


    <script>

        $(document).ready(function(){           

            var k = document.getElementById("jalurLaporan").value;    

            if(k!=""){

                jalurChange();

            }
            
        });

        function jalurChange() {
            var x = document.getElementById("jalurLaporan").value;
            var oldClass = "input-group-addon";

            if(x==""){
                allClear();
            }else if(x==2){
                allClear();
                selectedOne('spanFullname');
                selectedOne('spanPhoneNumber');
            }else if(x==3){
                allClear();
                selectedOne('spanFullname');
                selectedOne('spanHandphoneNumber');
            }else if(x==4){
                allClear();
                selectedOne('spanFullname');
                selectedOne('spanPhoneNumber');
            }else if(x==5){
                allClear();
                selectedOne('spanFullname');
                selectedOne('spanEmail');
            }else if(x==6){
                allClear();
                selectedOne('spanFullname');
            }else if(x==7){
                allClear();
                selectedOne('spanFullname');
            }else{
                allClear();
            }            
            
        }

        function allClear(){
            var oldClass = "input-group-addon";
            document.getElementById('spanEmail').className = oldClass;
            document.getElementById('spanFullname').className = oldClass;
            document.getElementById('spanAddress').className = oldClass;
            document.getElementById('spanPhoneNumber').className = oldClass;
            document.getElementById('spanHandphoneNumber').className = oldClass;
            document.getElementById('spanIdentityNumber').className = oldClass;
        }

        function selectedOne(param){
            var oldClass = "input-group-addon";           
            document.getElementById(param).className = oldClass + ' themeFontColor';            
        }


        /** Setting Date Time Picker **/

         $.datetimepicker.setLocale('en');

         $('#datetimepicker').datetimepicker({
            dayOfWeekStart : 1,
            lang:'en',
            startDate:  '{{ $global_service->getNow() }}',
            maxDate: '{{ $global_service->getNow() }}',             

            onChangeDateTime:function(ct,$i){

                var x = new Date();
                var y= '{{ $global_service->getNowTm() }}';

                if(ct > x){

                    document.getElementById("datetimepicker").value = y;

                }

            }
            
        });
        
        /** Setting Date Time Picker **/

    </script>
    <script type="text/javascript">
        $('input[name="file[]"]').fileuploader({
                limit: null,
                fileMaxSize: 5,
                extensions: ['jpg', 'jpeg', 'pdf'],
                addMore: true
        });
    </script>
    <script type="text/javascript">
        $(function(){
            $('#checkbox1').click(function(){
                if ($(this).is(':checked')) {
                    $('#statusId').val(3);
                }else{
                    $('#statusId').val(1);
                }
            });
        });
    </script>

@endpush