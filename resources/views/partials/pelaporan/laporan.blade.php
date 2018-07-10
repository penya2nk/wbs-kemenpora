<div>
    @inject('global_service', 'rni\Services\GlobalServices')

    <!-- <input type="textarea" name="noRegistrasi" value="{{ $global_service->noRegistrasi() }}"> -->    

    @if(Auth::user())
        <input type="hidden" name="userId" value="{{ Auth::user()->id }}">
    @elseif(Auth::guest())
        <input type="hidden" name="jalurId" value="1">
    @endif

    <div class="row">
        <div class="col-sm-12">
            <div class="form-group ">
                <div class="input-group">
                    <span class="input-group-addon text-danger"><span class="fa fa-quote-left"></span></span>
                    {{--<input type="text" id="deskripsiSingkat" name="deskripsiSingkat" class="form-control" placeholder="Deskripsi singkat">--}}
                    {!! Form::text('deskripsiSingkat',null,['class'=>'form-control','placeholder'=>'Deskripsi Singkat (Contoh: Terjadi Pencurian Dilantai 1)']) !!}
                </div>
            </div>
        </div>
    </div>

    @include('errors.each',['field'=>'deskripsiSingkat'])

    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon text-danger""><span class="fa fa-hand-o-up"></span></span>

                    {!! Form::select('kategoriLaporan', $global_service->getKategoriList(), null, ['placeholder' => '-- Pilih Kategori Laporan --','class'=>'form-control select']) !!}

                </div>
            </div>
        </div>
    </div>

    @include('errors.each',['field'=>'kategoriLaporan'])

    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon text-danger""><span class="fa fa-pencil"></span></span>
                    {{--<textarea class="form-control" rows="5" id="deskripsi" name="deskripsi" placeholder="Deskripsi"></textarea>--}}
                    {!! Form::textarea('deskripsi', null, ['class'=>'form-control','placeholder'=>'Deskripsi Lengkap / Kronologis Kejadian','rows'=>'5']) !!}
                </div>
            </div>
        </div>
    </div>

    @include('errors.each',['field'=>'deskripsi'])

</div>
