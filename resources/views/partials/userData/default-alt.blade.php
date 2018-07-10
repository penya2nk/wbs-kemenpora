{{--If in page register--}}

@if($mode == "register")

    <input type="hidden" name="roleId" value="1">

    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon themeFontColor"><span class="glyphicon glyphicon-envelope"></span></span>
                    {{--<input type="text" id="email" name="email" class="form-control" placeholder="Email">--}}
                    {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Email']) !!}
                </div>
            </div>
        </div>
    </div>

    @include('errors.each',['field'=>'email'])

    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon themeFontColor"><span class="glyphicon glyphicon-paperclip"></span></span>
            <input class="form-control" type="password" name="password" placeholder="Password">
        </div>
    </div>

    @include('errors.each',['field'=>'password'])

    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon themeFontColor"><span class="glyphicon glyphicon-paperclip"></span></span>
            <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password">
        </div>
    </div>

    @include('errors.each',['field'=>'password-confirmation'])

    <div class="row">
    <div class="col-sm-12">
        <div class="form-group ">
            <div class="input-group">
                <span class="input-group-addon themeFontColor"><span class="glyphicon glyphicon-user"></span></span>
                {{--<input type="text" id="fullname" name="fullname" class="form-control" placeholder="Nama lengkap">--}}
                {!! Form::text('fullname',null,['class'=>'form-control','placeholder'=>'Nama lengkap']) !!}
                
            </div>
        </div>
    </div>
</div>

@include('errors.each',['field'=>'fullname'])

@endif
{{--If in page register--}}



@if($mode != "register")

<div class="row">
    <div class="col-sm-12">
        <div class="form-group ">
            <div class="input-group">
                <span class="input-group-addon themeFontColor"><span class="glyphicon glyphicon-user"></span></span>
                {{--<input type="text" id="fullname" name="fullname" class="form-control" placeholder="Nama lengkap">--}}
                {!! Form::text('fullname',Auth::user()->fullname,['class'=>'form-control','placeholder'=>'Nama lengkap','disabled'=>'disabled']) !!}

            </div>            
            <div style="padding-left: 40px;padding-top: 10px;font-style: italic;font-size: 12.5px;" class="themeFontColor">
                    <strong style="font-size: 15px;">* Untuk mengubah nama, silahkan gunakan menu ubah profil.</strong>
                    
                </div>
        </div>

    </div>
</div>

@include('errors.each',['field'=>'fullname'])

<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="glyphicon glyphicon-map-marker"></span></span>
                {{--<textarea class="form-control" rows="5" id="address" name="address" placeholder="Alamat"></textarea>--}}
                {!! Form::textarea('address',Auth::user()->address,['class'=>'form-control','placeholder'=>'Alamat','rows'=>'5']) !!}
            </div>
        </div>
    </div>
</div>

@include('errors.each',['field'=>'address'])

<div class="row">
    <div class="col-sm-12">
        <div class="form-group ">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="glyphicon glyphicon-earphone"></span></span>
                {{--<input type="text" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="Nomor Telepon">--}}
                {!! Form::text('phoneNumber',Auth::user()->phoneNumber,['class'=>'form-control','placeholder'=>'Nomor Telepon']) !!}
            </div>
        </div>
    </div>
</div>

@include('errors.each',['field'=>'phoneNumber'])

<div class="row">
    <div class="col-sm-12">
        <div class="form-group ">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="glyphicon glyphicon-phone"></span></span>
                {{--<input type="text" id="handphoneNumber" name="handphoneNumber" class="form-control" placeholder="Nomor Handphone">--}}
                {!! Form::text('handphoneNumber',Auth::user()->handphoneNumber,['class'=>'form-control','placeholder'=>'Nomor Handphone']) !!}
            </div>
        </div>
    </div>
</div>

@include('errors.each',['field'=>'handphoneNumber'])

<!-- <div class="row" style="visibility: hidden;">
    <div class="col-sm-12">
        <div class="form-group ">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="glyphicon glyphicon-bookmark"></span></span>
        
                {!! Form::text('identityNumber',Auth::user()->identityNumber,['class'=>'form-control','placeholder'=>'Nomor KTP']) !!}

            </div>
        </div>
    </div>
</div>

@include('errors.each',['field'=>'identityNumber']) -->

@endif


@if($mode != "buat-laporan")

<div class="form-group text-center">
    <div class="col-12">
        <br>
        <button type="submit" class="btn btn-default btn-theme2">
            @if(isset($buttonText))
                {{ $buttonText }}
            @endif
        </button>
        <br>
        <br>
    </div>
</div>

@endif


