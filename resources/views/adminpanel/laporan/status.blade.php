

@inject('global_service','rni\Services\GlobalServices')

@if(Auth::user()->roleId==2)	

	@if($global_service->getStatus($laporan->statusId)=="Menunggu")

		@if($laporan->spam == "")

			@include('adminpanel.contents.form-spam-web', ['id' => $laporan->id])

			Tandai bahwa laporan ini terindikasi <strong>spam</strong> : &nbsp;

			<a data-toggle="modal" class="btn btn-sm btn-danger" href="#form-spam"><strong>Spam</strong></a>

		@endif

		@if($laporan->spam != "")

			Hapus <strong>spam</strong> : &nbsp;

			<a href="{{ route('laporan.spam.web.hapus', [$laporan->id]) }}" class="btn btn-sm btn-danger"><strong>Hapus</strong></a>

		@endif

	@endif

	<!-- @if($global_service->getStatus($laporan->statusId)=="Menunggu" || $global_service->getStatus($laporan->statusId)=="Tidak Diteruskan")

		Ubah status : &nbsp;

		@if($global_service->getStatus($laporan->statusId)=="Menunggu")

			<a href="{{ route('laporan.laporan-detail.status', [$laporan->id,2]) }}" class="btn btn-sm btn-danger">Tidak Diteruskan</a> 
		@elseif($global_service->getStatus($laporan->statusId)=="Tidak Diteruskan")

			<a href="{{ route('laporan.laporan-detail.status', [$laporan->id,1]) }}" class="btn btn-sm btn-warning">Boleh Diteruskan</a>

		@endif	

	@endif -->

@elseif(Auth::user()->roleId==3)

	@if($laporan->statusId >= 3)

		@include('adminpanel.contents.form-status-web', ['laporan' => $laporan])

		Ubah status : &nbsp;

		<a href="{{ route('laporan.laporan-detail.status', [$laporan->id,4]) }}" class="btn btn-sm btn-success" {!! (($global_service->getStatus($laporan->statusId)=="Sedang Diproses") ? 'disabled' : '') !!} {!! (($global_service->getStatus($laporan->statusId)=="Tidak Terbukti") ? 'disabled' : '') !!} {!! (($global_service->getStatus($laporan->statusId)=="Selesai") ? 'disabled' : '') !!}><strong>Sedang Diproses</strong></a> 

		{{-- <a href="{{ route('laporan.laporan-detail.status', [$laporan->id,5]) }}" class="btn btn-sm btn-danger" {!! (($global_service->getStatus($laporan->statusId)=="Tidak Terbukti") ? 'disabled' : '') !!} {!! (($global_service->getStatus($laporan->statusId)=="Selesai") ? 'disabled' : '') !!}><strong>Tidak Terbukti</strong></a>  --}}

		<a href="{{ route('laporan.laporan-detail.status', [$laporan->id,6]) }}" class="btn btn-sm btn-primary" {!! (($global_service->getStatus($laporan->statusId)=="Tidak Terbukti") ? 'disabled' : '') !!} {!! (($global_service->getStatus($laporan->statusId)=="Selesai") ? 'disabled' : '') !!}><strong>Selesai</strong></a> 		

		@if($global_service->getStatus($laporan->statusId)=="Sedang Diproses" || $global_service->getStatus($laporan->statusId)=="Tidak Terbukti" || $global_service->getStatus($laporan->statusId)=="Selesai")

		<a data-toggle="modal" class="btn btn-warning" href="#form-status"><strong>Penjelasan Status</strong></a>

		@endif


	@endif
                                                        
@endif
