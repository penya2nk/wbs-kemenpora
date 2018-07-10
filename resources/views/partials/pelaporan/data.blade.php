<div class="row">
    <div class="col-sm-12">
        <div class="form-group ">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2 text-navy"><span class="glyphicon glyphicon-envelope"></span></span>
                {{--<input type="text" id="email" name="email" class="form-control" placeholder="Email">--}}
                {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Email', 'id'=>'email']) !!}
            </div>
        </div>
    </div>
</div>

@include('errors.each',['field'=>'email'])

<div class="row">
    <div class="col-sm-12">
        <div class="form-group ">
            <div class="input-group">
                <span class="input-group-addon themeFontColor text-navy"><span class="glyphicon glyphicon-user"></span></span>
                {{--<input type="text" id="fullname" name="fullname" class="form-control" placeholder="Nama lengkap">--}}
                {!! Form::text('fullname',null,['class'=>'form-control','placeholder'=>'Nama lengkap', 'id'=>'fullname']) !!}
            </div>
        </div>
    </div>
</div>

<div id="ErrorName">
@include('errors.each',['field'=>'fullname'])
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="glyphicon glyphicon-map-marker"></span></span>
                {{--<textarea class="form-control" rows="5" id="address" name="address" placeholder="Alamat"></textarea>--}}
                {!! Form::textarea('address',null,['class'=>'form-control','placeholder'=>'Alamat','rows'=>'5', 'id'=>'address']) !!}
            </div>
        </div>
    </div>
</div>

@include('errors.each',['field'=>'address'])

<div class="row">
    <div class="col-sm-12">
        <div class="form-group ">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2 text-navy"><span class="glyphicon glyphicon-earphone"></span></span>
                {{--<input type="text" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="Nomor Telepon">--}}
                {!! Form::text('phoneNumber',null,['class'=>'form-control','placeholder'=>'Nomor Telepon', 'id'=>'phoneNumber']) !!}
            </div>
        </div>
    </div>
</div>

@include('errors.each',['field'=>'phoneNumber'])

<div class="row">
    <div class="col-sm-12">
        <div class="form-group ">
            <div class="input-group">
                <span class="input-group-addon themeFontColor"><span class="glyphicon glyphicon-phone"></span></span>
                {{--<input type="text" id="handphoneNumber" name="handphoneNumber" class="form-control" placeholder="Nomor Handphone">--}}
                {!! Form::text('handphoneNumber',null,['class'=>'form-control','placeholder'=>'Nomor Handphone', 'id'=>'handphoneNumber']) !!}
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
                {!! Form::text('identityNumber',null,['class'=>'form-control','placeholder'=>'Nomor KTP', 'id'=>'identityNumber']) !!}

            </div>
        </div>
    </div>
</div>

@include('errors.each',['field'=>'identityNumber'])
