<!-- Button Lapor -->
<style type="text/css">
	.btn-theme2:hover{
		opacity: 0.8;
	}
</style>
<div class="row text-center vertical-align" style="padding-top:0px;padding-bottom:20px;">

    <div class="container">

    	@if(Auth::user())
    	<button onclick="location.href='{{ route('user.buat-pelaporan') }}'" type="button" class="btnx btn-3 btn-3e icon-arrow-right">&nbsp;Laporkan!&nbsp;</button>
    	@else
        <button onclick="location.href='{{ route('buat-pelaporan-wl') }}'" type="button" class="btnx btn-3 btn-3e icon-arrow-right">&nbsp;Laporkan!&nbsp;</button>
        @endif

</div>

</div>

<!-- Button Lapor -->