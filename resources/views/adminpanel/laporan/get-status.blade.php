@inject('global_service','rni\Services\GlobalServices')
@if($global_service->getStatus($laporan->statusId) == "Menunggu")
<span class="text-info">
@elseif($global_service->getStatus($laporan->statusId) == "Tidak Diteruskan")
<span class="text-danger">
@elseif($global_service->getStatus($laporan->statusId) == "Diteruskan")
<span class="text-warning">
@elseif($global_service->getStatus($laporan->statusId) == "Sedang Diproses")
<span class="text-success">
@elseif($global_service->getStatus($laporan->statusId) == "Tidak Terbukti")
<span class="text-danger">
@elseif($global_service->getStatus($laporan->statusId) == "Selesai")
<span class="text-success">
@endif
{{ $global_service->getStatus($laporan->statusId) }}
</span> 