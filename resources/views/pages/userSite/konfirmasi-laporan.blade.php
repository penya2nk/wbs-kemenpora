<br>

<!-- Operator <-> Pelapor -->

@if($gs->getKonfirmasi($laporanUuid, 3)->count() > 0)

    <div class="row" style="background-color: #009587; border-radius: 2px; padding: 20px; color: white;">
        <div class="col-sm-12">
            <strong style="font-size: 15px;">
            @if($user->roleId == 2)
                Konfirmasi dengan Pelapor : 
            @else
                Konfirmasi dengan Operator :
            @endif
            </strong>
            <br>
        </div>
    </div>

    @foreach($gs->getKonfirmasi($laporanUuid, 3) as $konfirmasi)

        <div class="row">&nbsp;</div>

        <div class="row" style="background-color: #ededed; border-radius: 2px; padding: 20px; line-height: 120%">

            <div class="col-sm-12">
                
                <div class="row">     

                    <div class="col-sm-12">           
                        
                            <small class="pull-right text-navy" style="color: #009587;">Konfirmasi dari : {{ $gs->getRole($gs->getUser($konfirmasi->userId)->roleId)->role }}</small>
                            @if(Auth::user()->id == $konfirmasi->userId)
                                <strong>Anda</strong>
                            @else
                                <strong>{{ $gs->getUser($konfirmasi->userId)->fullname }}</strong>
                            @endif
                            <p style="padding-top: 10px;">
                                {{ $konfirmasi->konfirmasi }}
                            </p>
                            <small class="text-muted"><!-- Today 4:21 pm - 12.06.2014 -->{{ $konfirmasi->created_at->format('l, d F Y - H:i:s') }}</small>

                            </div>
                        
                </div>  
                @if($gs->getKonfirmasiRe($laporanUuid, 4, $konfirmasi->id)->count() > 0)

                    @foreach($gs->getKonfirmasiRe($laporanUuid, 4, $konfirmasi->id) as $konfirmasi_re)

                        <hr>

                        <div class="row">         

                                <div class="col-sm-1"></div>

                                <div class="col-sm-11">
                                
                                <small class="pull-right" style="color: #009587;">Konfirmasi dari : {{ $gs->getRole($gs->getUser($konfirmasi_re->userId)->roleId)->role }}</small>
                                @if(Auth::user()->id == $konfirmasi_re->userId)
                                    <strong>Anda</strong>
                                @else
                                    <strong>{{ $gs->getUser($konfirmasi_re->userId)->fullname }}</strong>
                                @endif
                                <p style="padding-top: 10px;">
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
                        

                        {!! Form::open(['method'=>'POST','action'=>['KonfirmasiController@addRe', $laporanId, $laporanUuid , $user->id, $routeDetail, $konfirmasi->id]]) !!}
                        
                        <input type="hidden" name="tipeKonfirmasi" value="4">
                        <input type="hidden" name="userIdPenerima" value="{{ $konfirmasi->userId }}">

                        <div class="col-sm-9 col-sm-12">
                            <textarea name="konfirmasi_re{{ $konfirmasi->id }}" class="form-control" placeholder="Silahkan balas konfirmasi disini.." style="resize: none; font-size: 14px;background: white;margin: 10px 0;" rows="3" required=""></textarea>
                        </div>

                        <div class="col-sm-3 col-sm-12">
                            <button type="submit" class="btn btn-lg btn-theme2" style="width: 100%;"><span class="fa fa-reply"></span>&nbsp;&nbsp;Balas Konfirmasi</button>
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

<br>

<!-- SPI/APIP <-> Pelapor -->

@if($gs->getKonfirmasi($laporanUuid, 5)->count() > 0)

    <div class="row" style="background-color: #009587; border-radius: 2px; padding: 20px; color: white;">
        <div class="col-sm-12">
            <strong style="font-size: 15px;">
            @if($user->roleId == 3)
                Konfirmasi dengan Pelapor : 
            @else
                Konfirmasi dengan APIP :
            @endif
            </strong>
            <br>
        </div>
    </div>

    @foreach($gs->getKonfirmasi($laporanUuid, 5) as $konfirmasi)

        <div class="row">&nbsp;</div>

        <div class="row" style="background-color: #ededed; border-radius: 2px; padding: 20px; line-height: 120%">

            <div class="col-sm-12">
                
                <div class="row">     

                    <div class="col-sm-12">           
                        
                            <small class="pull-right text-navy" style="color: #009587;">Konfirmasi dari : {{ $gs->getRole($gs->getUser($konfirmasi->userId)->roleId)->role }}</small>
                            @if(Auth::user()->id == $konfirmasi->userId)
                                <strong>Anda</strong>
                            @else
                                <strong>{{ $gs->getUser($konfirmasi->userId)->fullname }}</strong>
                            @endif
                            <p style="padding-top: 10px;">
                                {{ $konfirmasi->konfirmasi }}
                            </p>
                            <small class="text-muted"><!-- Today 4:21 pm - 12.06.2014 -->{{ $konfirmasi->created_at->format('l, d F Y - H:i:s') }}</small>

                            </div>
                        
                </div>  
                @if($gs->getKonfirmasiRe($laporanUuid, 6, $konfirmasi->id)->count() > 0)

                    @foreach($gs->getKonfirmasiRe($laporanUuid, 6, $konfirmasi->id) as $konfirmasi_re)

                        <hr>

                        <div class="row">         

                                <div class="col-sm-1"></div>

                                <div class="col-sm-11">
                                
                                <small class="pull-right" style="color: #009587;">Konfirmasi dari : {{ $gs->getRole($gs->getUser($konfirmasi_re->userId)->roleId)->role }}</small>
                                @if(Auth::user()->id == $konfirmasi_re->userId)
                                    <strong>Anda</strong>
                                @else
                                    <strong>{{ $gs->getUser($konfirmasi_re->userId)->fullname }}</strong>
                                @endif
                                <p style="padding-top: 10px;">
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
                        

                        {!! Form::open(['method'=>'POST','action'=>['KonfirmasiController@addRe', $laporanId, $laporanUuid , $user->id, $routeDetail, $konfirmasi->id]]) !!}

                        <input type="hidden" name="tipeKonfirmasi" value="6">

                        <div class="col-sm-9 col-sm-12">
                            <textarea name="konfirmasi_re{{ $konfirmasi->id }}" class="form-control" placeholder="Silahkan balas konfirmasi disini.." style="resize: none; font-size: 14px;background: white;margin: 10px 0;" rows="3" required=""></textarea>
                        </div>

                        <div class="col-sm-3 col-sm-12">
                            <button type="submit" class="btn btn-lg btn-theme2" style="width: 100%;"><span class="fa fa-reply"></span>&nbsp;&nbsp;Balas Konfirmasi</button>
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


