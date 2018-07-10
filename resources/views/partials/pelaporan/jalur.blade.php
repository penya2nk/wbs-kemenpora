<div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon themeFontColor text-navy""><span class="glyphicon glyphicon-tasks"></span></span>

                    @inject('global_service', 'rni\Services\GlobalServices')

                    {!! Form::select('jalurId', $global_service->getJalurList(), null, ['placeholder' => '-- Pilih Jalur Laporan --','class'=>'form-control select', 'onchange'=>'jalurChange()','id'=>'jalurLaporan']) !!}
                </div>
            </div>
        </div>
    </div>

    @include('errors.each',['field'=>'jalurId'])