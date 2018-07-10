{{--If in page add--}}

@if($mode == "add")

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

@endif
{{--If in page add--}}



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

<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="glyphicon glyphicon-map-marker"></span></span>
                {{--<textarea class="form-control" rows="5" id="address" name="address" placeholder="Alamat"></textarea>--}}
                {!! Form::textarea('address',null,['class'=>'form-control','placeholder'=>'Alamat','rows'=>'5']) !!}
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
                {!! Form::text('phoneNumber',null,['class'=>'form-control','placeholder'=>'Nomor Telepon']) !!}
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
                {!! Form::text('handphoneNumber',null,['class'=>'form-control','placeholder'=>'Nomor Handphone']) !!}
            </div>
        </div>
    </div>
</div>

@include('errors.each',['field'=>'handphoneNumber'])

<div class="row">
    <div class="col-sm-12">
        <div class="form-group ">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="glyphicon glyphicon-bookmark"></span></span>
                {{--<input type="text" id="identityNumber" name="identityNumber" class="form-control" placeholder="Nomor KTP">--}}
                {!! Form::text('identityNumber',null,['class'=>'form-control','placeholder'=>'Nomor KTP']) !!}

            </div>
        </div>
    </div>
</div>

@include('errors.each',['field'=>'identityNumber'])


@inject('global_service', 'rni\Services\GlobalServices')

<div class="row">
    <div class="col-sm-12">
        <div class="form-group ">
            <div class="input-group">
                <span class="input-group-addon themeFontColor"><span class="glyphicon glyphicon-user"></span></span>

                {!! Form::select('roleId', $global_service->getRoles(), null, ['placeholder' => '-- Pilih Role User --','class'=>'form-control select']) !!}

            </div>
        </div>
    </div>
</div>

@include('errors.each',['field'=>'roleId'])


@if($mode == "edit")

<div class="row">
    <br>
    <h4 class="text-navy">New Password Request</h4>
    <div class="hr-line-dashed">
    <br>
</div>



<div class="form-group">
        <div class="input-group">
            <span class="input-group-addon themeFontColor"><span class="glyphicon glyphicon-paperclip"></span></span>
            <input class="form-control" type="password" name="password" placeholder="New Password">
        </div>
    </div>

    @include('errors.each',['field'=>'password'])

    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon themeFontColor"><span class="glyphicon glyphicon-paperclip"></span></span>
            <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password">
        </div>
    </div>

@endif

<div class="form-group text-center">
    <div class="col-12">
        <br>
        <button type="submit" class="btn btn-primary">
            {{ $buttonText }}
        </button>
        <br>
        <br>
    </div>
</div>


