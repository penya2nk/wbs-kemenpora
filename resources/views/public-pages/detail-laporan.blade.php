@extends('public-pages.template')

@section('title')
	Daftar Laporan
@stop

@section('content')

	@inject('gs','rni\Services\GlobalServices')
	
	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">

					<div class="row">
						<div class="col-md-4">
							@include('public-pages.sidebar-member')
						</div>

						<div class="col-md-8">
							<div class="wrap-text">

						        <div class="row">
						            <div class="col-sm-6">
						                <span class="themeFontColor" style="font-size:20px;"><b>Detail Laporan</b></span>
						            </div>
						            <div class="col-sm-6 text-right">
						                <a class="btn btn-primary" href="{{ route('user.lihat-laporan') }}" style="background: black;"><i class="fa fa-chevron-left" aria-hidden="true"></i> Kembali</a>
						            </div>
						        </div>

						        <hr>

						        <div class="row">
						            <div class="col-sm-12">
						                <span class="main-text" style="font-size:18px;"><b>Status Laporan :</b></span><br><br>
						            </div>
						        </div>
						        <div class="row">
						            <div class="main-text col-sm-3">
						                No. Registrasi
						            </div>
						            <div class="col-sm-1">
						                :
						            </div>
						            <div class="main-text col-sm-8">
						                {{ $laporan->noRegistrasi }}
						            </div>
						        </div>
						        <div class="row">
						            <div class="main-text col-sm-3">
						                Tanggal dibuat
						            </div>
						            <div class="col-sm-1">
						                :
						            </div>
						            <div class="main-text col-sm-8">
						                {{ $laporan->created_at->format('l, d F Y') }} - {{ $laporan->created_at->format('H:i') }}
						            </div>
						        </div>
						        @if($laporan->tanggalDikirim != null)
						            <div class="row">
						                <div class="main-text col-sm-3">
						                    Tanggal dikirim
						                </div>
						                <div class="col-sm-1">
						                    :
						                </div>
						                <div class="main-text col-sm-8">
						                    {{ date_format(date_create($laporan->tanggalDikirim),"l, d F Y - H:i") }}
						                </div>
						            </div>
						        @endif
						        <div class="row">
						            <div class="main-text col-sm-3">
						                Status
						            </div>
						            <div class="col-sm-1">
						                :
						            </div>
						            <div class="main-text col-sm-8">                
						                @include('adminpanel.laporan.get-status',['laporan'=>$laporan])
						            </div>
						        </div>
						        @if($laporan->noteSpi!="")

                                <div class="row">
                                    <div class="main-text col-sm-3">
                                        Penjelasan Status
                                    </div>
                                    <div class="col-sm-1">
                                        :
                                    </div>
                                    <div class="main-text col-sm-8">
                                        {{ $laporan->noteSpi }}
                                    </div>
                                </div> 

                                @endif
						        <div class="row">
						            <div class="main-text col-sm-3">
						                Informasi Pribadi
						            </div>
						            <div class="col-sm-1">
						                :
						            </div>
						            <div class="main-text col-sm-8">
						                @if($laporan->kategoriPengirim == 1)
						                    Tidak Dirahasiakan
						                @else
						                    Dirahasiakan
						                @endif
						            </div>
						        </div>

						        <hr>

						        <div class="row">
						            <div class="col-sm-12">
						                <span class="main-text" style="font-size:18px;"><b>Keterangan :</b></span><br><br>
						            </div>
						        </div>
						        <div class="row">
						            <div class="main-text col-sm-3">
						                Kategori Laporan
						            </div>
						            <div class="col-sm-1">
						                :
						            </div>
						            <div class="main-text col-sm-8">
						                {{ $gs->getKategori($laporan->kategoriLaporan) }}
						            </div>
						        </div>
						        <div class="row">
						            <div class="main-text col-sm-3">
						                Deskripsi Singkat
						            </div>
						            <div class="col-sm-1">
						                :
						            </div>
						            <div class="main-text col-sm-8">
						                {{ $laporan->deskripsiSingkat }}
						            </div>
						        </div>
						        <div class="row">
						            <div class="main-text col-sm-3">
						                Deskripsi
						            </div>
						            <div class="col-sm-1">
						                :
						            </div>
						            <div class="main-text col-sm-8">
						                {{ $laporan->deskripsi }}
						            </div>
						        </div>

						        <hr>

						        <div class="row">
						            <div class="col-sm-12">
						                <span class="main-text" style="font-size:18px;"><b>Bukti-bukti Terkait :</b></span><br><br>
						            </div>
						        </div>

						        <div class="row">
						        	<div class="col-sm-12">
						        		@foreach ($bukti as $element)
						        			<a href="{{ url('/')}}/bukti/{{ $element->file_name }}" class="btn btn-primary" download="">{{ $element->file_name }} <i class="fa fa-arrow-down" aria-hidden="true"></i></a><br><br>
						        		@endforeach
						        	</div>
						        </div>

						        <hr>

						        <div class="row">
						            <div class="col-sm-12">
						                <span class="main-text" style="font-size:18px;"><b>Isi Laporan :</b></span><br><br>
						            </div>
						        </div>
						        <div class="row">
						            <div class="main-text col-sm-4">
						                Kapan kejadian ini terjadi? (Tanggal/waktu yang tepat, jam kerja/diluar jam kerja)
						            </div>
						            <div class="col-sm-1">
						                :
						            </div>
						            <div class="main-text col-sm-7">
						                {{ $laporan->question1 }}
						            </div>
						        </div>
						        <br>
						        <div class="row">
						            <div class="main-text col-sm-4">
						                Siapa nama dan jabatan terlapor?
						            </div>
						            <div class="col-sm-1">
						                :
						            </div>
						            <div class="main-text col-sm-7">
						                {{ $laporan->question2 }}
						            </div>
						        </div>
						        <br>
						        <div class="row">
						            <div class="main-text col-sm-4">
						                Apakah ada orang lain yang terlibat? (Nama/Jabatan)
						            </div>
						            <div class="col-sm-1">
						                :
						            </div>
						            <div class="main-text col-sm-7">
						                {{ $laporan->question3 }}
						            </div>
						        </div>
						        <br>
						        <div class="row">
						            <div class="main-text col-sm-4">
						                Apakah ada saksi mata? (Nama/Jabatan)
						            </div>
						            <div class="col-sm-1">
						                :
						            </div>
						            <div class="main-text col-sm-7">
						                {{ $laporan->question4 }}
						            </div>
						        </div>
						        <br>
						        <div class="row">
						            <div class="main-text col-sm-4">
						                Bagaimana kejadian ini terjadi? (Jelaskan kronologinya)
						            </div>
						            <div class="col-sm-1">
						                :
						            </div>
						            <div class="main-text col-sm-7">
						                {{ $laporan->question5}}
						            </div>
						        </div>
						        <br>
						        <div class="row">
						            <div class="main-text col-sm-4">
						                Apakah kejadian ini mengakibatkan kerugian secara finansial terhadap perusahaan?
						            </div>
						            <div class="col-sm-1">
						                :
						            </div>
						            <div class="main-text col-sm-7">
						                {{ $laporan->question6 }}
						            </div>
						        </div>
						        <br>
						        <div class="row">
						            <div class="main-text col-sm-4">
						                Jika ya, berapa besar jumlah kerugian finansial yang diperkirakan?
						            </div>
						            <div class="col-sm-1">
						                :
						            </div>
						            <div class="main-text col-sm-7">
						                {{ $laporan->question7 }}
						            </div>
						        </div>
						        <br>
						        <div class="row">
						            <div class="main-text col-sm-4">
						                Apakah kejadian ini pernah terjadi sebelumnya?
						            </div>
						            <div class="col-sm-1">
						                :
						            </div>
						            <div class="main-text col-sm-7">
						                {{ $laporan->question8 }}
						            </div>
						        </div>
						        <br>
						        <div class="row">
						            <div class="main-text col-sm-4">
						                Apakah terdapat dokumentasi atau bukti-bukti yang berkaitan dengan kejadian yang dilaporkan?
						            </div>
						            <div class="col-sm-1">
						                :
						            </div>
						            <div class="main-text col-sm-7">
						                {{ $laporan->question9 }}
						            </div>
						        </div>
						        <br>
						        <div class="row">
						            <div class="main-text col-sm-4">
						                Apakah anda telah melaporkan kejadian tersebut melalui sarana lain atau kepada pihak lain? Jika ya, melalui sarana apa dan kepada siapa?
						            </div>
						            <div class="col-sm-1">
						                :
						            </div>
						            <div class="main-text col-sm-7">
						                {{ $laporan->question10 }}
						            </div>
						        </div>
						        <br>
						        <div class="row">
						            <div class="main-text col-sm-4">
						                Apakah anda sudah berbicara dengan terlapor? Jika sudah, tanggapan apa yang dia/mereka berikan?
						            </div>
						            <div class="col-sm-1">
						                :
						            </div>
						            <div class="main-text col-sm-7">
						                {{ $laporan->question11 }}
						            </div>
						        </div>
						        <br>
						        <div class="row">
						            <div class="main-text col-sm-4">
						                Apakah anda telah melaporkan kejadian ini ke polisi/pihak berwajib/pihak lainnya?
						            </div>
						            <div class="col-sm-1">
						                :
						            </div>
						            <div class="main-text col-sm-7">
						                {{ $laporan->question12 }}
						            </div>
						        </div>
						        <hr>
						        {!! Form::open(['method'=>'POST','action'=>'LaporanLainController@addAvidenceMember','enctype'=>'multipart/form-data','files'=>'true','multiple'=>'multiple']) !!}
						        	<input type="hidden" name="id" value="{{ $laporan->id }}">
								    <div class="row">
							            <div class="col-sm-12">
							                <span class="main-text"><b>Upload bukti-bukti tambahan (jika ada) Maksimal 5Mb dengan format JPG/PDF :</b></span>
							            </div>
							        </div>

								    <div class="row">
								    	<div class="col-sm-12">
											<input type="file" name="files[]">
										</div>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-primary">Kirim Bukti Tambahan</button>
										</div>
								    </div>
						        {!! Form::close() !!}
						        <hr>

						        @include('pages.userSite.konfirmasi-laporan',['laporanId'=>$laporan->id,'laporanUuid'=>$laporan->uuid,'user'=>$gs->getUser(Auth::user()->id),'routeDetail'=>'user.detail-laporan'])

						    </div>
						</div>
					</div>

				</div><!-- Content Col end -->

			</div><!-- Main row end -->

		</div><!-- Conatiner end -->
	</section><!-- Main container end -->
@stop

@section('javascript')
	<script type="text/javascript">
	    $.fn.dataTable.ext.errMode = 'throw';
	    $(function(){
	        var dt = $("#data-laporan").DataTable({
	            "order": [[ 0, "desc" ]],
	            "columnDefs": [
	                { "orderable": false, "targets": 6 }
	            ]
	        });
	        dt.column(0).visible(false);
	    });
	</script>
	<script type="text/javascript">
		$('input[name="files[]"]').fileuploader({
				limit: null,
	            fileMaxSize: 5,
	            extensions: ['jpg', 'jpeg', 'pdf'],
	            addMore: true
		});
	</script>
@stop