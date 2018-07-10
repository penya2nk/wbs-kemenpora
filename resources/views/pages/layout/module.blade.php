<br>
<div class="row">
    <div class="col-sm-2"></div>

    <div class="col-sm-8 col-sm-12 text-center">

        <span class="themeFontColor" style="font-size:20px;"><b>{{ $title }}</b></span><hr>
        @if(isset($detail))
            {{ $detail }}<br><br>
        @endif

    </div>

    <div class="col-sm-2"></div>
</div>

<div class="row">
    <div class="col-sm-2"></div>

    <div class="col-sm-8 col-sm-12">
        @yield('modul')
    </div>

    <div class="col-sm-2"></div>
</div>
