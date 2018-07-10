{!! Form::open(['method'=>'POST','action'=>'PDFController@pdfViewMemberRekap']) !!}
<div class="row">
	<div class="col-sm-12">
		<div class="hr-line-dashed" style="border: 1px dashed #e7eaec;"></div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<span class="text-navy" style="font-size: 16px;"><b>Download Rekap Laporan : &nbsp;&nbsp;</b></span>
		<br><br>
	</div>
</div>
<div class="row">

	<div class="col-sm-1">
    <label class="font-noraml" style="font-size: 13px;padding-top: 5px;"><strong>Dari : </strong></label>
    </div>
	
	<div class="col-sm-3">

        <div class="form-group" id="dateStartRekap">

            <div class="input-group date">
                <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </span>
                @if($laporan=="non")
                    <input readonly type="text" class="form-control datepicker" value="{{ $global_service->nonGetFirst() }}" id="dateStartFieldRekap" name="dateStartFieldRekap">
                @else
                    <input readonly type="text" class="form-control datepicker" value="{{ $global_service->webGetFirst() }}" id="dateStartFieldRekap" name="dateStartFieldRekap">
                @endif
            </div>
        </div>   

    </div>

    <div class="col-sm-1">
    <label class="font-noraml" style="font-size: 13px;padding-top: 5px;"><strong>Sampai : </strong></label>
    </div>

    <div class="col-sm-3">

        <div class="form-group" id="dateEndRekap">

            <div class="input-group date">
                <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </span>
                @if($laporan=="non")
                    <input readonly type="text" class="form-control datepicker" value="{{ $global_service->nonGetLast() }}" id="dateEndFieldRekap" name="dateEndFieldRekap">
                @else
                    <input readonly type="text" class="form-control datepicker" value="{{ $global_service->webGetLast() }}" id="dateEndFieldRekap" name="dateEndFieldRekap">
                @endif
            </div>
        </div>   
             
    </div>

    <div class="col-sm-4">
    	<button class="btn" type="submit" style="padding-left: 10px;color: #1077b7; font-size: 13px;"><span class="glyphicon glyphicon-download-alt"></span><strong>&nbsp;Download Rekap Laporan</strong></button>
    </div>

</div>
{!! Form::close() !!}