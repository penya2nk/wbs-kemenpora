<div class="row">
    <div class="col-sm-12">
        <button onclick="location.href='{{ route('login-page') }}'" type="button" class="btn btn-responsive btn-theme2"
                {!! (Route::is('login-page') ? 'disabled' : '') !!}>&nbsp;Melaporkan sebagai member</button>

        <button onclick="location.href='{{ route('buat-pelaporan-wl') }}'" type="button" class="btn btn-responsive btn-theme2"
                {!! (Route::is('buat-pelaporan-wl') ? 'disabled' : '') !!}>&nbsp;Melaporkan tanpa mendaftar</button>
    </div>
</div>