<br>

<!-- SPI <-> Operator -->
@if($user->roleId == 2 || $user->roleId == 3)

@if($global_service->getKonfirmasi($laporanUuid, 1)->count() > 0)

    <div class="row" style="background-color: #2f4050; border-radius: 2px; padding: 20px; color: white;">
        <div class="col-sm-12">
            @if($user->roleId == 3)
            <strong style="font-size: 14px;">Konfirmasi dengan Operator : </strong>
            @else
            <strong style="font-size: 14px;">Konfirmasi dengan SPI : </strong>
            @endif
            <br>
        </div>
    </div>
    

	@foreach($global_service->getKonfirmasi($laporanUuid, 1) as $konfirmasi)

        <div class="row">&nbsp;</div>

		<div class="row" style="background-color: #ededed; border-radius: 2px; padding: 20px;">

			<div class="col-sm-12">
				
                <div class="row">     

                    <div class="col-sm-12">           
                        
                            <small class="pull-right text-navy">Konfirmasi dari : {{ $global_service->getRole($global_service->getUser($konfirmasi->userId)->roleId)->role }}</small>
                            @if(Auth::user()->id == $konfirmasi->userId)
                                <strong>Anda</strong>
                            @else
                                <strong>{{ $global_service->getUser($konfirmasi->userId)->fullname }}</strong>
                            @endif
                            <p class="m-b-xs" style="padding-top: 5px;">
                                {{ $konfirmasi->konfirmasi }}
                            </p>
                            <small class="text-muted"><!-- Today 4:21 pm - 12.06.2014 -->{{ $konfirmasi->created_at->format('l, d F Y - H:i:s') }}</small>

                            </div>
                        
                </div>  

                @if($global_service->getKonfirmasiRe($laporanUuid, 2, $konfirmasi->id)->count() > 0)

                    @foreach($global_service->getKonfirmasiRe($laporanUuid, 2, $konfirmasi->id) as $konfirmasi_re)

                        <div class="hr-line-dashed"></div>

                        <div class="row">         

                                <div class="col-sm-1"></div>

                                <div class="col-sm-11">
                                
                                <small class="pull-right text-navy">Konfirmasi dari : {{ $global_service->getRole($global_service->getUser($konfirmasi_re->userId)->roleId)->role }}</small>
                                @if(Auth::user()->id == $konfirmasi_re->userId)
                                    <strong>Anda</strong>
                                @else
                                    <strong>{{ $global_service->getUser($konfirmasi_re->userId)->fullname }}</strong>
                                @endif
                                <p class="m-b-xs" style="padding-top: 5px;">
                                        {{ $konfirmasi_re->konfirmasi }}
                                    </p>
                                <small class="text-muted"><!-- Today 4:21 pm - 12.06.2014 -->{{ $konfirmasi_re->created_at->format('l, d F Y - H:i:s') }}</small>

                                </div>
                                
                        </div>   

                    @endforeach

                @endif 


                    <div class="hr-line-dashed"></div>

                    <div class="row">                                        

            <!--             <div class="col-sm-1 col-sm-12">
                        </div> -->                        
                        

                        {!! Form::open(['method'=>'POST','action'=>['Admin\Laporan\KonfirmasiController@addRe', $laporanId, $laporanUuid , $user->id, $routeDetail, $konfirmasi->id]]) !!}

                        <input type="hidden" name="tipeKonfirmasi" value="2">

                        <div class="col-sm-10 col-sm-12">
                            <textarea name="konfirmasi_re{{ $konfirmasi->id }}" class="form-control" placeholder="Silahkan balas konfirmasi disini.." style="resize: none; font-size: 13px;" rows="1"></textarea>
                        </div>

                        <div class="col-sm-2 col-sm-12">
                            <button type="submit" class="btn btn-sm btn-primary" style="width: 100%;"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;&nbsp;Balas Konfirmasi</button>
                        </div>
                            
                        {!! Form::close() !!}

                    </div>     

                    <div class="row">
                        <div class="col-sm-12">
                        <br>
                        @include('errors.each',['field'=>'konfirmasi_re'.$konfirmasi->id])
                        </div>
                    </div>

                
			</div>

		</div>

	@endforeach

    <br>

@endif

<!-- Operator <-> Pelapor -->

@endif


@if(($user->roleId == 1 || $user->roleId == 2) && $routeDetail == 'laporan.laporan-detail')

@if($global_service->getKonfirmasi($laporanUuid, 3)->count() > 0)

    <div class="row" style="background-color: #2f4050; border-radius: 2px; padding: 20px; color: white;">
        <div class="col-sm-12">
            @if($user->roleId == 2)
            <strong style="font-size: 14px;">Konfirmasi dengan Pelapor : </strong>
            @else
            <strong style="font-size: 14px;">Konfirmasi dengan Operator : </strong>
            @endif
            <br>
        </div>
    </div>

    @foreach($global_service->getKonfirmasi($laporanUuid, 3) as $konfirmasi)

        <div class="row">&nbsp;</div>

        <div class="row" style="background-color: #ededed; border-radius: 2px; padding: 20px;">

            <div class="col-sm-12">
                
                <div class="row">     

                    <div class="col-sm-12">           
                        
                            <small class="pull-right text-navy">Konfirmasi dari : {{ $global_service->getRole($global_service->getUser($konfirmasi->userId)->roleId)->role }}</small>
                            @if(Auth::user()->id == $konfirmasi->userId)
                                <strong>Anda</strong>
                            @else
                                <strong>{{ $global_service->getUser($konfirmasi->userId)->fullname }}</strong>
                            @endif
                            <p class="m-b-xs" style="padding-top: 5px;">
                                {{ $konfirmasi->konfirmasi }}
                            </p>
                            <small class="text-muted"><!-- Today 4:21 pm - 12.06.2014 -->{{ $konfirmasi->created_at->format('l, d F Y - H:i:s') }}</small>

                            </div>
                        
                </div>  

                @if($global_service->getKonfirmasiRe($laporanUuid, 4, $konfirmasi->id)->count() > 0)

                    @foreach($global_service->getKonfirmasiRe($laporanUuid, 4, $konfirmasi->id) as $konfirmasi_re)

                        <div class="hr-line-dashed"></div>

                        <div class="row">         

                                <div class="col-sm-1"></div>

                                <div class="col-sm-11">
                                
                                <small class="pull-right text-navy">Konfirmasi dari : {{ $global_service->getRole($global_service->getUser($konfirmasi_re->userId)->roleId)->role }}</small>
                                @if(Auth::user()->id == $konfirmasi_re->userId)
                                    <strong>Anda</strong>
                                @else
                                    <strong>{{ $global_service->getUser($konfirmasi_re->userId)->fullname }}</strong>
                                @endif
                                <p class="m-b-xs" style="padding-top: 5px;">
                                        {{ $konfirmasi_re->konfirmasi }}
                                    </p>
                                <small class="text-muted"><!-- Today 4:21 pm - 12.06.2014 -->{{ $konfirmasi_re->created_at->format('l, d F Y - H:i:s') }}</small>

                                </div>
                                
                        </div>   

                    @endforeach

                @endif 


                    <div class="hr-line-dashed"></div>

                    <div class="row">                                        

            <!--             <div class="col-sm-1 col-sm-12">
                        </div> -->                        
                        

                        {!! Form::open(['method'=>'POST','action'=>['Admin\Laporan\KonfirmasiController@addRe', $laporanId, $laporanUuid , $user->id, $routeDetail, $konfirmasi->id]]) !!}

                        <input type="hidden" name="tipeKonfirmasi" value="4">

                        <div class="col-sm-10 col-sm-12">
                            <textarea name="konfirmasi_re{{ $konfirmasi->id }}" class="form-control" placeholder="Silahkan balas konfirmasi disini.." style="resize: none; font-size: 13px;" rows="1"></textarea>
                        </div>

                        <div class="col-sm-2 col-sm-12">
                            <button type="submit" class="btn btn-sm btn-primary" style="width: 100%;"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;&nbsp;Balas Konfirmasi</button>
                        </div>
                            
                        {!! Form::close() !!}

                    </div>     

                    <div class="row">
                        <div class="col-sm-12">
                        <br>
                        @include('errors.each',['field'=>'konfirmasi_re'.$konfirmasi->id])
                        </div>
                    </div>

                
            </div>

        </div>

    @endforeach

    <br><br>

@endif

@endif


@if((($user->roleId == 2 || $user->roleId == 3) && $routeDetail == 'laporan.laporan-detail') || ($user->roleId == 3 && $routeDetail == 'laporan.laporan-detail-alt'))

{!! Form::open(['method'=>'POST','action'=>['Admin\Laporan\KonfirmasiController@add', $laporanId, $laporanUuid , $user->id, $routeDetail]]) !!}

<div class="row">                                        

	<div class="col-sm-9 col-sm-12">
		<textarea name="konfirmasi" class="form-control" placeholder="Silahkan lakukan konfirmasi dari laporan diatas disini.." style="resize: none; font-size: 13px;" rows="4"></textarea>
	</div>

	<div class="col-sm-3 col-sm-12">
		<button type="submit" class="btn btn-md btn-primary" style="height: 92px;width: 100%;"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;&nbsp;Kirim Konfirmasi</button>
	</div>

</div>
<br>
@include('errors.each',['field'=>'konfirmasi'])

@if($user->roleId == 3) 

    <input type="hidden" name="tipeKonfirmasi" value="1">

@else

    <input type="hidden" name="tipeKonfirmasi" value="3">

@endif

{!! Form::close() !!} 

@endif



@push('ad-js')

<script>
    
    function submitdata(laporanUuid){
        //evt.preventDefault();
        //alert(laporanUuid);
        //return false;

        // $.ajax({
        //   type: 'post',
        //   url: '{{ url("/adminpanel/laporan/konfirmasi/add-re") }}',
        //   data: {
        //    user_name:name,
        //    user_age:age,
        //    user_course:course
        //   },
        //   success: function (response) {
        //    $('#success__para').html("You data will be saved");
        //   }
        //  });
            
         return false;
    }

</script>

@endpush