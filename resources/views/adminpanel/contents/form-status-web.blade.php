@inject('global_service','rni\Services\GlobalServices')

<div class="modal fade" id="form-status" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title text-navy" id="myModalLabel">Penjelasan Status Laporan (Status saat ini : {{ $global_service->getStatus($laporan->statusId) }})</h4>
                </div>
            
                <div class="modal-body">

                    {!! Form::open(['method'=>'POST','action'=>['Admin\Laporan\DataController@statusWeb', $laporan->id]]) !!}
      
                    <p>Penjelasan status <br> (Penjelasan sebelumnya akan tergantikan dengan penjelasan yang baru) : </p>
                    <p>
                        <textarea class="form-control" placeholder="Catatan untuk laporan" rows="4" name="note" cols="50" style="resize: none;">{{ $laporan->noteSpi }}</textarea>
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
