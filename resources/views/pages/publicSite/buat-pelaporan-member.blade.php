@extends('pages.layout.container-alt')

@section('main')

    @inject('global_service','rni\Services\GlobalServices')

    <div class="row">
        <div class="col-sm-12 text-right">
            @include('pages.contents.tab-lapor')
        </div>
    </div>
    <br>
    <span class="themeFontColor" style="font-size:20px;"><b>Pembuatan Laporan</b></span><hr>


    <div class="row">

        <div class="col-sm-12">

            <p>Silahkan membuat laporan dengan memberi informasi selengkap mungkin.<br>
            <i>Field dengan <span class="themeFontColor">icon merah</span> harus diisi.</i></p><br>

        </div>

    </div>

    {!! Form::open(['method'=>'POST','action'=>'LaporanLainController@create']) !!}

        <div class="row">
            <div class="col-sm-12">

                @include('partials.pelaporan.laporan')

            </div>
        </div>

        <hr>

        <div class="row">

            <div class="col-sm-12">

                <span class="themeFontColor2" style="font-size:18px;"><b>Pertanyaan mengenai laporan :</b></span><br><br>

            </div>

            <div class="col-sm-12">

                @include('partials.pelaporan.laporan-extension')

            </div>

        </div>

        <hr>

        <!-- @if(isset($tes)) -->
                    {{ $tes }}
                    <!-- @endif -->

        <div class="row" id="memberButton">

            <div class="col-sm-12">

                <span class="themeFontColor2" style="font-size:18px;"><b>Melaporkan sebagai :</b></span><br><br>

            </div>

            <div class="col-sm-12">

                <div class="row">


                    <div class="col-sm-6 col-sm-12">
                        <button onclick="location.href='{{ route('buat-pelaporan-wl') }}'" id="btnNonMember" type="button" class="btnx btn-2 btn-2a" style="width: 100%;">Bukan Member</button>
                    </div>

                    <div class="col-sm-6 col-sm-12">
                        <button id="btnMember" type="button" class="btnx btn-2 btn-2a" style="width: 100%;" disabled>Member</button>
                    </div>
                    
                </div>

            </div>

        </div>

        <br>
        <hr>

        <div id="memberForm">

            <div class="row">

                <div class="col-sm-12">

                    <span class="themeFontColor2" style="font-size:18px;"><b>Masukkan Email dan Password anda :</b></span><br><br>

                </div>

                <div class="col-sm-12">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group ">
                                <div class="input-group">
                                    <span class="input-group-addon themeFontColor text-navy"><span class="glyphicon glyphicon-envelope"></span></span>
                                    {!! Form::text('email2',null,['class'=>'form-control','placeholder'=>'Email', 'id'=>'email2']) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('errors.each',['field'=>'email2'])

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group ">
                                <div class="input-group">
                                    <span class="input-group-addon themeFontColor text-navy"><span class="glyphicon glyphicon-paperclip"></span></span>
                                    <input class="form-control" type="password" name="password2" placeholder="Password" id="password2">
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('errors.each',['field'=>'password2'])

                </div>

            </div>

        </div> 

        <hr>

        <div class="row">

            <div class="col-sm-12">

                <span class="themeFontColor2" style="font-size:18px;"><b>Mengenai informasi pribadi anda :</b></span><br><br>

            </div>

            <div class="col-sm-12">

                @include('partials.pelaporan.informasi')


            </div>

        </div>

        <hr><br>

    <div class="row">

        <div class="col-sm-6 col-sm-12">

            {!! app('captcha')->display() !!}
            {{--            @include('errors.each',['field'=>'g-recaptcha-response'])--}}

            {{--@if ($errors->has('g-recaptcha-response'))--}}
            {{--<strong>Captcha is required</strong>--}}
            {{--@endif--}}

        </div>

        <div class="col-sm-6 col-sm-12">

            @include('errors.each',['field'=>'g-recaptcha-response'])

        </div>

    </div>
    <br>

        <div class="row text-center">

            <div class="col-sm-12 text-center">

                <br>
                <button type="submit" class="btn btn-lg btn-default btn-theme2">Kirim Laporan</button>
                

            </div>

        </div>
        <br>
        <br>

        <div class="row bg-success" style="border-radius: 5px;">
            <div class="col-sm-12">
                <br><p>Setelah laporan ini dikirim maka :</p>
                <ol>
                    <li>Kami akan mengirim email konfirmasi secara otomatis jika laporan telah kami terima.</li>
                    <li>Jika tidak ada tanggapan setelah konfirmasi maka laporan ini akan ditutup secara otomatis.</li>
                </ol>
                <br>
            </div>
        </div>

    {!! Form::close() !!}



@stop

@push('dt-js')
<script type="text/javascript">

    $(document).ready(function(){
        // nonMember();
        var myParam = location.search.split('tes=')[1] ? location.search.split('tes=')[1] : 'null';
        alert(myParam);

        document.getElementsById("")
    });

    /** Setting Date Time Picker **/

     $.datetimepicker.setLocale('en');

     $('#datetimepicker').datetimepicker({
        dayOfWeekStart : 1,
        lang:'en',
        startDate:  '{{ $global_service->getNow() }}'
    });
    $('#datetimepicker').datetimepicker();
    
    /** Setting Date Time Picker **/

</script>
@endpush