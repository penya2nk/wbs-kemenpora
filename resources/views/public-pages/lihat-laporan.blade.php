@extends('public-pages.template')

@section('title')
	Daftar Laporan
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
							@inject('gs','rni\Services\GlobalServices')

						    @if($gs->cekLaporanUser(Auth::user()->id))

						        <h3 class="page-content-title first">Daftar Laporan</h3>
						        
						        <hr>
						        <p class="main-text text-danger">*Untuk melihat detail laporan klik text pada kolom <b>"Deskripsi Singkat"</b>.</p>
						        <div class="col-sm-12">
						            <div class="row">
						                <div class="table-responsive">
						                    <div class="col-sm-12">
						                        <table class="table table-bordered main-text" id="data-laporan">
						                            <thead>
						                            <tr>
						                                <th width="100">Tanggal/Jam</th>
						                                <th>Deskripsi Singkat</th>
						                                <th>Deskripsi</th>
						                                <th>Kategori</th>
						                                <th class="text-center">Status</th>
						                            </tr>
						                            </thead>
						                            <tbody>
	                                                    @foreach($laporan as $lap)
	                                                    <tr>
	                                                        <td>{{ $lap->created_at->format('d M Y') }} <br> {{ $lap->created_at->format('H:i:s') }}</td>
	                                                        <td><a href="{{ base64_encode($lap->id) }}/detail-laporan" >{{ $lap->deskripsiSingkat }}</a></td>
	                                                        <td>{{ $lap->deskripsi }}</td>
	                                                        <td>{{ $lap->kategori_laporan->kategori }}</td>
	                                                        <td align="center">
	                                                            @include('adminpanel.laporan.get-status',['laporan'=>$lap])
	                                                        </td>
	                                                    </tr>
	                                                    @endforeach
	                                                </tbody>
						                        </table>
						                    </div>
						                </div>
						            </div>

						        </div>

						    @else

						        <h3 class="main-text text-danger">
						        	<b>Tidak ada daftar laporan</b>
						        </h3>
						        <hr>

						        <div class="row">
						            <div class="col-sm-12">
						                <p class="main-text">Anda belum mempunyai laporan apapun.</p>
						            </div>
						        </div>

						    @endif
						</div>

					</div>

				</div><!-- Content Col end -->

			</div><!-- Main row end -->

		</div><!-- Conatiner end -->
	</section><!-- Main container end -->

	@if(empty(Auth::user()->email))
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			    <div class="modal-header" style="background-color: #fd0000;">
			      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			      <h4 class="modal-title" style="color: white;">Peringatan</h4>
			    </div>
			    <div class="modal-body">
			      <h4>Anda wajib mengisi <span style="color: red;">e-mail</span> agar Anda dapat membuat pelaporan, segera masukan <span style="color: red;">e-mail</span> Anda <a href="{{ route('user.ubah-email') }}"><u>disini</u></a></h4>
			    </div>
			    <div class="modal-footer">
			      <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			    </div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	@endif
@stop

@section('javascript')
	<script type="text/javascript">
	    $(document).ready(function(){
		    $('#data-laporan').DataTable({
										    "order": [[ 0, "asc" ]]
										  });
		});
	</script>
	<script type="text/javascript">
	    $('#myModal').modal();
	</script>
@stop