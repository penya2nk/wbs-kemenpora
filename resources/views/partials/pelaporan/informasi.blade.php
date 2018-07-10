<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="glyphicon glyphicon-pencil"></span></span>
                {{--<span class="input-group-addon themeFontColor"><span class="glyphicon glyphicon-pencil"></span></span>--}}
                {{--<textarea class="form-control" rows="5" id="deskripsi" name="deskripsi" placeholder="Deskripsi"></textarea>--}}
                {!! Form::select('kategoriPengirim', [
                        '1' => 'Sertakan informasi pribadi pada laporan ini',
                        '2' => 'Rahasiakan informasi pribadi pada laporan ini'
                        ], null, ['class'=>'form-control select','id'=>'kategoriPengirim']) !!}
            </div>
        </div>
        

    </div>
</div>