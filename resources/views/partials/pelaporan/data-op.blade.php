<div class="row">
    <div class="col-sm-12">
        <div class="form-group ">
            <div class="input-group">
                <span class="input-group-addon" id="spanEmail"><span class="glyphicon glyphicon-envelope"></span></span>
                {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Email']) !!}
            </div>
        </div>
    </div>
</div>

@include('errors.each',['field'=>'email'])

<div class="row">
    <div class="col-sm-12">
        <div class="form-group ">
            <div class="input-group">
                <span class="input-group-addon" id="spanFullname"><span class="glyphicon glyphicon-user"></span></span>
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
                <span class="input-group-addon" id="spanAddress"><span class="glyphicon glyphicon-map-marker"></span></span>
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
                <span class="input-group-addon" id="spanPhoneNumber"><span class="glyphicon glyphicon-earphone"></span></span>
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
                <span class="input-group-addon" id="spanHandphoneNumber"><span class="glyphicon glyphicon-phone"></span></span>
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
                <span class="input-group-addon" id="spanIdentityNumber"><span class="glyphicon glyphicon-bookmark"></span></span>
                {!! Form::text('identityNumber',null,['class'=>'form-control','placeholder'=>'Nomor KTP']) !!}

            </div>
        </div>
    </div>
</div>

@include('errors.each',['field'=>'identityNumber'])


