@extends('public-pages.template')

@section('title')
	Lapor
@stop

@section('content')
	@inject('global_service','rni\Services\GlobalServices')
	
	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">

					<div class="row">
						<div class="col-md-4">
							@include('public-pages.sidebar-member')
						</div>

						<div class="col-md-8">
							<h3 class="page-content-title first">Buat Pelaporan</h3>
							<hr>
							<p class="main-text">Silahkan membuat laporan dengan memberi informasi selengkap mungkin.
							<br>Field dengan <span class="text-danger">icon merah</span> harus diisi.</p>
							{!! Form::open(['method'=>'POST','action'=>'LaporanLainController@createMember','enctype'=>'multipart/form-data','files'=>'true','multiple'=>'multiple','class'=>'kirim-laporan']) !!}

							<input type="hidden" name="statusId" value="1">

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
						                    <span class="input-group-addon text-danger""><span class="fa fa-hand-pointer-o"></span></span>
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
						                    {!! Form::textarea('deskripsi', null, ['class'=>'form-control','placeholder'=>'Deskripsi Lengkap / Kronologis Kejadian','rows'=>'5']) !!}
						                </div>
						            </div>
						        </div>
						    </div>
						    @include('errors.each',['field'=>'deskripsi'])

						    <div class="row">
					            <div class="col-sm-12">
					                <span class="main-text"><b>Upload bukti-bukti (jika ada) Maksimal 5Mb dengan format JPG/PDF :</b></span>
					            </div>
					        </div>

						    <div class="row">
						    	<div class="col-sm-12">
									<input type="file" name="files[]">
								</div>
						    </div>
						    
						    <div class="gap-20"></div>

					        <div class="row">
					            <div class="col-sm-12">
					                <span class="main-text"><b>Pertanyaan mengenai laporan :</b></span>
					            </div>
					        </div>
					        
					        <div class="alert alert-info" style="text-align: justify;">Informasi dibawah ini akan digunakan sebagai indikasi awal pemeriksaan dan bukan langsung menjadi bukti laporan. Silahkan isi bila ada detil informasi yang anda ketahui. Bila tidak ada silahkan dikosongkan (tidak wajib diisi)</div>

					        <div class="row">
							    <div class="col-sm-12">
							        <div class="form-group">
							            <div class="input-group">
							                <span class="input-group-addon themeFontColor2"><span class="fa fa-calendar"></span></span>
							                {!! Form::textarea('question1', null, ['class'=>'form-control datepicker','placeholder'=>'    1. Kapan kejadian ini terjadi? (Tanggal/waktu yang tepat, jam kerja/diluar jam kerja)','rows'=>'5', 'id'=>'datetimepicker']) !!}

							            </div>
							        </div>
							    </div>
							</div>
							@include('errors.each',['field'=>'question1'])

							<div class="row">
							    <div class="col-sm-12">
							        <div class="form-group">
							            <div class="input-group">
							                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>                
							                {!! Form::textarea('question2', null, ['class'=>'form-control','placeholder'=>'2. Siapa nama dan jabatan terlapor?','rows'=>'5']) !!}
							            </div>
							        </div>
							    </div>
							</div>
							@include('errors.each',['field'=>'question2']) 

							<div class="row">
							    <div class="col-sm-12">
							        <div class="form-group">
							            <div class="input-group">
							                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>
							                {!! Form::textarea('question3', null, ['class'=>'form-control','placeholder'=>'3. Apakah ada orang lain yang terlibat? (Nama/Jabatan)','rows'=>'5']) !!}
							            </div>
							        </div>
							    </div>
							</div>
							@include('errors.each',['field'=>'question3'])

							<div class="row">
							    <div class="col-sm-12">
							        <div class="form-group">
							            <div class="input-group">
							                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>
							                {!! Form::textarea('question4', null, ['class'=>'form-control','placeholder'=>'4. Apakah ada saksi mata? (Nama/Jabatan)','rows'=>'5']) !!}
							            </div>
							        </div>
							    </div>
							</div> 
							@include('errors.each',['field'=>'question4'])  

							<div class="row">
							    <div class="col-sm-12">
							    	<div class="form-group">
							            <div class="input-group">
							                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>
							                {!! Form::textarea('question5', null, ['class'=>'form-control','placeholder'=>'5. Bagaimana kejadian ini terjadi? (Jelaskan kronologinya)','rows'=>'5']) !!}
							            </div>
							        </div>
							    </div>
							</div>
							@include('errors.each',['field'=>'question5'])

							<div class="row">
							    <div class="col-sm-12">
							    	<div class="form-group">
							            <div class="input-group">
							                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>
							                {!! Form::textarea('question6', null, ['class'=>'form-control','placeholder'=>'6. Apakah kejadian ini mengakibatkan kerugian secara finansial terhadap perusahaan?','rows'=>'5']) !!}
							            </div>
							        </div>
							    </div>
							</div>
							@include('errors.each',['field'=>'question6'])

							<div class="row">
							    <div class="col-sm-12">
							    	<div class="form-group">
							            <div class="input-group">
							                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>
							                {!! Form::textarea('question7', null, ['class'=>'form-control','placeholder'=>'7. Jika ya, berapa besar jumlah kerugian finansial yang diperkirakan?','rows'=>'5']) !!}
							            </div>
							        </div>
							    </div>
							</div>
							@include('errors.each',['field'=>'question7'])

							<div class="row">
							    <div class="col-sm-12">
								    <div class="form-group">
							            <div class="input-group">
							                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>
							                {!! Form::textarea('question8', null, ['class'=>'form-control','placeholder'=>'8. Apakah kejadian ini pernah terjadi sebelumnya?','rows'=>'5']) !!}
							            </div>
							        </div>
							    </div>
							</div>
							@include('errors.each',['field'=>'question8'])

							<div class="row">
							    <div class="col-sm-12">
								    <div class="form-group">
							            <div class="input-group">
							                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>
							                {!! Form::textarea('question9', null, ['class'=>'form-control','placeholder'=>'9. Apakah terdapat dokumentasi atau bukti-bukti yang berkaitan dengan kejadian yang dilaporkan?','rows'=>'5']) !!}
							            </div>
							        </div>
							    </div>
							</div>
							@include('errors.each',['field'=>'question9'])

							<div class="row">
							    <div class="col-sm-12">
							    	<div class="form-group">
							            <div class="input-group">
							                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>
							                {!! Form::textarea('question10', null, ['class'=>'form-control','placeholder'=>'10. Apakah anda telah melaporkan kejadian tersebut melalui sarana lain atau kepada pihak lain? Jika ya, melalui sarana apa dan kepada siapa?','rows'=>'5']) !!}
							            </div>
							        </div>
							    </div>
							</div>   
							@include('errors.each',['field'=>'question10'])

							<div class="row">
							    <div class="col-sm-12">
							        <div class="form-group">
							            <div class="input-group">
							                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>
							                {!! Form::textarea('question11', null, ['class'=>'form-control','placeholder'=>'11. Apakah anda sudah berbicara dengan terlapor? Jika sudah, tanggapan apa yang dia/mereka berikan?','rows'=>'5']) !!}
							            </div>
							        </div>
							    </div>
							</div>
							@include('errors.each',['field'=>'question11'])

							<div class="row">
							    <div class="col-sm-12">
							        <div class="form-group">
							            <div class="input-group">
							                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>
							                {!! Form::textarea('question12', null, ['class'=>'form-control','placeholder'=>'12. Apakah anda telah melaporkan kejadian ini ke polisi/pihak berwajib/pihak lainnya?','rows'=>'5']) !!}
							            </div>
							        </div>
							    </div>
							</div>
							@include('errors.each',['field'=>'question12'])

					        <input type="hidden" name="modeMember" id="modeMember" value="2">

					        <div class="gap-20"></div>

					        <div class="row">
					            <div class="col-sm-12">
					                <span class="main-text"><b>Mengenai informasi pribadi anda :</b></span>
					            </div>
					        </div>

					        <div class="gap-20"></div>

					        <div class="row">
					        	<div class="col-sm-12">
							        <div class="form-group">
							            <div class="input-group">
							                <span class="input-group-addon themeFontColor2"><span class="fa fa-pencil"></span></span>
							                {!! Form::select('kategoriPengirim', [
							                        '1' => 'Sertakan informasi pribadi pada laporan ini',
							                        '2' => 'Rahasiakan informasi pribadi pada laporan ini'
							                        ], null, ['class'=>'form-control select','id'=>'kategoriPengirim']) !!}
							            </div>
							        </div>
							        <p class="main-text text-danger">
							        	<em>* Jika anda memilih untuk merahasiakan data diri, kami tidak akan mempublish data diri anda sebagai pelapor.</em>
							        </p>
							    </div>
					        </div>
					         
					        <div class="gap-20"></div>

					        <div class="row">
							    <div class="col-sm-12">
							        <div class="form-group">
							            <div class="input-group">
							                {!! app('captcha')->display() !!}
							            </div>
							        </div>
							    </div>
							</div>
							@include('errors.each',['field'=>'g-recaptcha-response'])
						    
						    <div class="gap-20"></div>

						    <div class="row">
					            <div class="col-sm-12">
					                <button type="submit" class="btn btn-primary">Kirim Laporan</button>
					            </div>
				            </div>

						    <div class="gap-20"></div>

					        <div class="row" style="padding: 10px;border: 1px solid #a2a2a2;">
					            <div class="col-sm-12">
					                <p class="main-text">Setelah laporan ini dikirim maka :</p>
					                <ol class="main-text">
					                    <li>Kami akan mengirim email konfirmasi secara otomatis jika laporan telah kami terima.</li>
					                    <li>Jika tidak ada tanggapan setelah konfirmasi maka laporan ini akan ditutup secara otomatis.</li>
					                </ol>
					            </div>
					        </div>

					    {!! Form::close() !!}
						</div>

					</div>

				</div><!-- Content Col end -->

			</div><!-- Main row end -->

		</div><!-- Conatiner end -->
	</section><!-- Main container end -->
@stop

@section('javascript')
	<script type="text/javascript">
    	/** Setting Date Time Picker **/
        $.datetimepicker.setLocale('en');

        $('#datetimepicker').datetimepicker({
            dayOfWeekStart : 1,
            lang:'en',
            startDate:  '{{ $global_service->getNow() }}',
            maxDate: '{{ $global_service->getNow() }}',             

            onChangeDateTime:function(ct,$i){

                var x = new Date();
                var y= '{{ $global_service->getNowTm() }}';

                if(ct > x){

                    document.getElementById("datetimepicker").value = y;

                }

            }
        });
       /** Setting Date Time Picker **/
	</script>
	<script type="text/javascript">
		$('input[name="files[]"]').fileuploader({
				limit: null,
	            fileMaxSize: 5,
	            extensions: ['jpg', 'jpeg', 'pdf'],
	            addMore: true
		});
	</script>
	<script>
	    $(".kirim-laporan").on("submit", function(){
	        return confirm("Apakah data-data yang telah Anda masukan sudah sesuai? jika belum sesuai, mohon periksa kembali data-data yang telah Anda masukan. Karna setiap Laporan yang telah dikirim tidak dapat di-ubah kembali. Jika ingin melanjutkan tekan 'OK' Jika ingin merevisi kembali tekan 'Cancel' ");
	    });
	</script>
@stop