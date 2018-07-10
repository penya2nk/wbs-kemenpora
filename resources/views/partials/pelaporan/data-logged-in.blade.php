{{--@inject('userData','rni\Services\UserDataServices')--}}
<div class="row">
    <div class="col-sm-12">
        <div class="form-group ">
            <div class="input-group">
                <span class="input-group-addon themeFontColor"><span class="glyphicon glyphicon-envelope"></span></span>
                <input type="text" id="email" name="email" class="form-control" placeholder="Email" disabled value="{{ Auth::user()->email }}">
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group ">
            <div class="input-group">
                <span class="input-group-addon themeFontColor"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Nama lengkap" disabled value="{{ Auth::user()->fullname }}">
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="glyphicon glyphicon-map-marker"></span></span>
                <textarea class="form-control" rows="5" id="address" name="address" placeholder="Alamat" disabled>{{ Auth::user()->address }}</textarea>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group ">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="glyphicon glyphicon-earphone"></span></span>
                <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="Nomor Telepon" disabled value="{{ Auth::user()->phoneNumber }}">
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group ">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="glyphicon glyphicon-phone"></span></span>
                <input type="text" id="handphoneNumber" name="handphoneNumber" class="form-control" placeholder="Nomor Handphone" disabled value="{{ Auth::user()->handphoneNumber }}">
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group ">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="glyphicon glyphicon-bookmark"></span></span>
                <input type="text" id="identityNumber" name="identityNumber" class="form-control" placeholder="Nomor KTP" disabled value="{{ Auth::user()->identityNumber }}">
            </div>
        </div>
    </div>
</div>


