
<div class="modal fade" id="form-spam" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title text-navy" id="myModalLabel">Indikasi Spam</h4>
                </div>
            
                <div class="modal-body">
                    {!! Form::open(['method'=>'POST','action'=>['Admin\Laporan\DataController@spamWeb', $id]]) !!}

                    <p>Alasan bahwa laporan teridentifikasi spam : </p>
                    <p>
                        <textarea class="form-control" placeholder="Indikasi spam" rows="4" name="spam" cols="50" style="resize: none;"></textarea>
                    </p>
                    <p align="right">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><strong>Cancel</strong></button>

                        <button class="btn btn-primary" type="submit" style="padding-left: 10px;"><strong>Kirim</strong></button>
                    </p>

                    {!! Form::close() !!}
                    <br>
                </div>

            </div>
        </div>
    </div>
