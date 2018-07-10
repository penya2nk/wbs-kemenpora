<div class="row">
    <div class="col-sm-6 col-sm-12">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="fa fa-calendar"></span></span>
                {!! Form::textarea('question1', null, ['class'=>'form-control datepicker','placeholder'=>'1. Kapan kejadian ini terjadi? (Tanggal/waktu yang tepat, jam kerja/diluar jam kerja)','rows'=>'5', 'id'=>'datetimepicker']) !!}

            </div>
        </div>
        @include('errors.each',['field'=>'question1'])
    </div>

    <div class="col-sm-6 col-sm-12">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>                
                {!! Form::textarea('question2', null, ['class'=>'form-control','placeholder'=>'2. Siapa nama dan jabatan terlapor?','rows'=>'5']) !!}
            </div>
        </div>
        @include('errors.each',['field'=>'question2'])
    </div>
</div>


<div class="row">
    <div class="col-sm-6 col-sm-12">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>
                {{--<textarea class="form-control" rows="5" id="q3" name="q3" placeholder="3. Apakah ada orang lain yang terlibat? (Nama/Jabatan)"></textarea>--}}
                {!! Form::textarea('question3', null, ['class'=>'form-control','placeholder'=>'3. Apakah ada orang lain yang terlibat? (Nama/Jabatan)','rows'=>'5']) !!}
            </div>
        </div>
        @include('errors.each',['field'=>'question3'])
    </div>

    <div class="col-sm-6 col-sm-12">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>
                {{--<textarea class="form-control" rows="5" id="q4" name="q4" placeholder="4. Apakah ada saksi mata? (Nama/Jabatan)"></textarea>--}}
                {!! Form::textarea('question4', null, ['class'=>'form-control','placeholder'=>'4. Apakah ada saksi mata? (Nama/Jabatan)','rows'=>'5']) !!}
            </div>
        </div>
        @include('errors.each',['field'=>'question4'])
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-sm-12">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>
                {{--<textarea class="form-control" rows="5" id="q5" name="q5" placeholder="5. Bagaimana kejadian ini terjadi? (Jelaskan kronologinya)"></textarea>--}}
                {!! Form::textarea('question5', null, ['class'=>'form-control','placeholder'=>'5. Bagaimana kejadian ini terjadi? (Jelaskan kronologinya)','rows'=>'5']) !!}
            </div>
        </div>
        @include('errors.each',['field'=>'question5'])
    </div>

    <div class="col-sm-6 col-sm-12">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>
                {{--<textarea class="form-control" rows="5" id="q6" name="q6" placeholder="6. Apakah kejadian ini mengakibatkan kerugian secara finansial terhadap perusahaan?"></textarea>--}}
                {!! Form::textarea('question6', null, ['class'=>'form-control','placeholder'=>'6. Apakah kejadian ini mengakibatkan kerugian secara finansial terhadap perusahaan?','rows'=>'5']) !!}
            </div>
        </div>
        @include('errors.each',['field'=>'question6'])
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-sm-12">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>
                {{--<textarea class="form-control" rows="5" id="q7" name="q7" placeholder="7. Jika ya, berapa besar jumlah kerugian finansial yang diperkirakan?"></textarea>--}}
                {!! Form::textarea('question7', null, ['class'=>'form-control','placeholder'=>'7. Jika ya, berapa besar jumlah kerugian finansial yang diperkirakan?','rows'=>'5']) !!}
            </div>
        </div>
        @include('errors.each',['field'=>'question7'])
    </div>

    <div class="col-sm-6 col-sm-12">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>
                {{--<textarea class="form-control" rows="5" id="q8" name="q8" placeholder="8. Apakah kejadian ini pernah terjadi sebelumnya?"></textarea>--}}
                {!! Form::textarea('question8', null, ['class'=>'form-control','placeholder'=>'8. Apakah kejadian ini pernah terjadi sebelumnya?','rows'=>'5']) !!}
            </div>
        </div>
        @include('errors.each',['field'=>'question8'])
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-sm-12">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>
                {{--<textarea class="form-control" rows="5" id="q9" name="q9" placeholder="9. Apakah terdapat dokumentasi atau bukti-bukti yang berkaitan dengan kejadian yang dilaporkan?"></textarea>--}}
                {!! Form::textarea('question9', null, ['class'=>'form-control','placeholder'=>'9. Apakah terdapat dokumentasi atau bukti-bukti yang berkaitan dengan kejadian yang dilaporkan?','rows'=>'5']) !!}
            </div>
        </div>
        @include('errors.each',['field'=>'question9'])
    </div>

    <div class="col-sm-6 col-sm-12">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>
                {{--<textarea class="form-control" rows="5" id="q10" name="q10" placeholder="10. Apakah anda telah melaporkan kejadian tersebut melalui sarana lain atau kepada pihak lain? Jika ya, melalui sarana apa dan kepada siapa?"></textarea>--}}
                {!! Form::textarea('question10', null, ['class'=>'form-control','placeholder'=>'10. Apakah anda telah melaporkan kejadian tersebut melalui sarana lain atau kepada pihak lain? Jika ya, melalui sarana apa dan kepada siapa?','rows'=>'5']) !!}
            </div>
        </div>
        @include('errors.each',['field'=>'question10'])
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-sm-12">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>
                {{--<textarea class="form-control" rows="5" id="q11" name="q11" placeholder="11. Apakah anda sudah berbicara dengan terlapor? Jika sudah, tanggapan apa yang dia/mereka berikan?"></textarea>--}}
                {!! Form::textarea('question11', null, ['class'=>'form-control','placeholder'=>'11. Apakah anda sudah berbicara dengan terlapor? Jika sudah, tanggapan apa yang dia/mereka berikan?','rows'=>'5']) !!}
            </div>
        </div>
        @include('errors.each',['field'=>'question11'])
    </div>

    <div class="col-sm-6 col-sm-12">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>
                {{--<textarea class="form-control" rows="5" id="q12" name="q12" placeholder="12. Apakah anda telah melaporkan kejadian ini ke polisi/pihak yang berwajib?"></textarea>--}}
                {!! Form::textarea('question12', null, ['class'=>'form-control','placeholder'=>'12. Apakah anda telah melaporkan kejadian ini ke polisi/pihak yang berwajib?','rows'=>'5']) !!}
            </div>
        </div>
        @include('errors.each',['field'=>'question12'])
    </div>
</div>

