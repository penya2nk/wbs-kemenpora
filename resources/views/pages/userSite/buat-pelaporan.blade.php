@extends('pages.layout.container-alt')

@section('main')

    @inject('global_service','rni\Services\GlobalServices')

    <span class="themeFontColor" style="font-size:20px;"><b>Pembuatan Laporan</b></span><hr>    

    <div class="row">

        <div class="col-sm-12">

            <p>Silahkan membuat laporan dengan memberi informasi selengkap mungkin.<br>
            <i>Field dengan <span class="themeFontColor">icon merah</span> harus diisi.</i></p><br>

        </div>

    </div>

    {!! Form::open(['method'=>'POST','action'=>'LaporanWebController@create']) !!}

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

        <hr><br>

        <div class="row">

            <div class="col-sm-12">

                <span class="themeFontColor2" style="font-size:18px;"><b>Mengenai informasi pribadi anda :</b></span><br><br>

            </div>

            <div class="col-sm-12">

                @include('partials.pelaporan.informasi')
                <div style="padding-left: 40px;font-style: italic;font-size: 12.5px;" class="themeFontColor">
                    <strong style="font-size: 15px;">* Jika anda memilih untuk merahasiakan data diri, kami tidak akan mempublish data diri anda sebagai pelapor kepada pihak RNI.</strong>
                    
                </div>

            </div>

        </div>

        <div id="info">

            <br><hr>

            <div class="row">

                <div class="col-sm-12">

                    <span class="themeFontColor2" style="font-size:18px;"><b>Informasi anda :</b></span><br><br>

                </div>

                <div class="col-sm-12">

                    @include('partials.userData.default-alt',['mode'=>'buat-laporan'])

                </div>

            </div>

        </div>

        <br><hr><br>

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
    $('#kategoriPengirim').bind("change", function(){
        var x = document.getElementById("kategoriPengirim").value;
        
        if(x==1){
            document.getElementById('info').style.display = 'inline';    
        }else{
            document.getElementById('info').style.display = 'none';
        }
        
    });

    // $('#datePick').datepicker({
    //                 onSelect: function(dateText, inst) { alert("Working"); }
    //             });
     // $('#datetimepicker').datetimepicker({
     //    format: 'dd/MM/yyyy hh:mm:ss',
     //    language: 'en'
     //  });

     // $('#test').datetimepicker();

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

@endpush