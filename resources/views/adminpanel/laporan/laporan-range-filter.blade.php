<div class="row">

    <div class="col-sm-12">

        <span class="text-navy" style="font-size: 14px;"><strong>Tampilkan Laporan : &nbsp;&nbsp;</strong></span>
        <br>
        <br>

    </div>

</div>

<div class="row">

    <div class="col-sm-1">
    <label class="font-noraml" style="font-size: 13px;padding-top: 5px;"><strong>Dari : </strong></label>
    </div>

    <div class="col-sm-3">

        <div class="form-group" id="dateStart">

            <div class="input-group date">
                <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </span>
                @if($laporan=="non")
                    <input readonly type="text" class="form-control datepicker" value="{{ $global_service->nonGetFirst() }}" id="dateStartField">
                @else
                    <input readonly type="text" class="form-control datepicker" value="{{ $global_service->webGetFirst() }}" id="dateStartField">
                @endif
            </div>
        </div>

    </div>     

    <div class="col-sm-1">
    <label class="font-noraml" style="font-size: 13px;padding-top: 5px;"><strong>Sampai : </strong></label>
    </div>

    <div class="col-sm-3">

        <div class="form-group" id="dateEnd">
        
            <div class="input-group date">
                <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </span>
                @if($laporan=="non")
                    <input readonly type="text" class="form-control datepicker" value="{{ $global_service->nonGetLast() }}" id="dateEndField">
                @else
                    <input readonly type="text" class="form-control datepicker" value="{{ $global_service->webGetLast() }}" id="dateEndField">
                @endif
            </div>
        </div>

    </div>                                   

    <div class="col-sm-4" align="left">

        <div class="row">

            
                <button class="btn btn-md btn-primary" onclick="tampilData()" >Tampilkan</button>
          
                <button class="btn btn-md btn-primary" onclick="resetTampilData()">Lihat Semua</button>                
           

        </div>      

    </div>

</div>


<br>    
<br>